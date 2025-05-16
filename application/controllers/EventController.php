<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('session'); // Cargar la biblioteca de sesiones
        $this->load->model('EventModel');
        setlocale(LC_TIME, 'es_ES.UTF-8', 'es_ES', 'Spanish_Spain', 'Spanish');

        // Proteger todas las rutas excepto las públicas
        if (!$this->session->userdata('logged_in') && $this->uri->segment(1) === 'events') {
            redirect('auth/login'); // Redirigir al login si no está autenticado
        }
    }

    private function authFilter()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }
    }

    public function index()
{
    if (!$this->session->userdata('logged_in')) {
        redirect('auth/login'); // Redirige al login si no está autenticado
    }

    // Obtener todos los eventos
    $events = $this->EventModel->getAllEvents();

    // Convertir fechas a cadenas formateadas y agrupar por mes
    $eventsByMonth = [];
    foreach ($events as &$event) {
        $date = new DateTime($event['event_date']);
        $month = $date->format('Y-m'); // Agrupamos por mes y año
        $event['event_date'] = $date->format('Y-m-d'); // Convertimos a string
        $event['time_formatted'] = isset($event['time']) ? date('H:i', strtotime($event['time'])) : null;

        if (!isset($eventsByMonth[$month])) {
            $eventsByMonth[$month] = [];
        }
        $eventsByMonth[$month][] = $event;
    }

    $data['eventsByMonth'] = $eventsByMonth;
    $this->load->view('events/listEvent', $data);
}

    public function create()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }

        $this->load->view('events/createEvent');
    }

    public function indexApp()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }

        $events = $this->EventModel->getAllEvents();
        $featuredEvents = $this->EventModel->getFeaturedEvents();

        // Convertir fechas y agrupar
        $eventsByMonth = [];
        foreach ($events as $event) {
            $date = new DateTime($event['event_date']);
            $month = $date->format('Y-m');
            $event['event_date'] = $date;

            if (!isset($eventsByMonth[$month])) {
                $eventsByMonth[$month] = [];
            }
            $eventsByMonth[$month][] = $event;
        }

        // Agrupar eventos por ubicación
        $eventsByLocation = [
            'CABA' => array_filter($events, function ($event) {
                return $event['location'] === 'CABA';
            }),
            'Conurbano' => array_filter($events, function ($event) {
                return $event['location'] === 'Conurbano';
            }),
        ];

        $data = [
            'eventsByMonth' => $eventsByMonth,
            'eventsByLocation' => $eventsByLocation,
            'events' => $events,
            'featuredEvents' => $featuredEvents,
        ];

        $this->load->view('index', $data);
    }

    public function store()
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }

        $this->load->library('form_validation');

        $this->form_validation->set_rules('name', 'Event Name', 'required|max_length[255]');
        $this->form_validation->set_rules('event_date', 'Event Date', 'required');
        $this->form_validation->set_rules('description', 'Description', 'max_length[255]');
        $this->form_validation->set_rules('time', 'Time', 'max_length[5]');
        $this->form_validation->set_rules('image_url', 'Image URL', 'valid_url');
        $this->form_validation->set_rules('facebook_url', 'Facebook URL', 'valid_url');
        $this->form_validation->set_rules('instagram_url', 'Instagram URL', 'valid_url');
        $this->form_validation->set_rules('info_event', 'Info Event', 'max_length[255]');
        $this->form_validation->set_rules('is_featured', 'Is Featured', 'integer');
        $this->form_validation->set_rules('location', 'Location', 'max_length[255]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('events/createEvent');
        } else {
            $data = $this->input->post();
            $this->EventModel->createEvent($data);
            redirect('events');
        }
    }

    public function edit($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }

        $event = $this->EventModel->getEventById($id);
        if (!$event) {
            show_404();
        }

        $data['event'] = $event;
        $this->load->view('events/editEvent', $data);
    }

    public function update($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }

        $data = $this->input->post();
        $this->EventModel->updateEvent($id, $data);
        redirect('events');
    }

    public function destroy($id)
    {
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login'); // Redirige al login si no está autenticado
        }
        
        $this->EventModel->deleteEvent($id);
        redirect('events');
    }
    public function update_order()
{
    // Sólo AJAX/CLI opcional
    $input = json_decode($this->input->raw_input_stream, true);
    if (isset($input['id'], $input['display_order'])) {
        // Usar el model correcto y su método
        $this->EventModel->updateEvent(
            $input['id'],
            ['display_order' => (int)$input['display_order']]
        );
        echo json_encode(['success' => true]);
        return;
    }
    echo json_encode(['success' => false, 'error' => 'Faltan parámetros']);
}


}
