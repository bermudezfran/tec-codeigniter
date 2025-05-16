<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session'); // Cargar sesiones
        $this->load->model('User_model'); // Cargar modelo de usuario
    }

    public function get_user()
    {
        // Verificar si el usuario está autenticado
        if (!$this->session->userdata('logged_in')) {
            // Responder con un error 401 si no está autenticado
            return $this->output
                ->set_content_type('application/json')
                ->set_status_header(401)
                ->set_output(json_encode(['message' => 'Unauthorized']));
        }

        // Obtener los datos del usuario desde la sesión
        $user_id = $this->session->userdata('user_id');
        $user = $this->User_model->get_user_by_id($user_id);

        // Retornar los datos del usuario como JSON
        return $this->output
            ->set_content_type('application/json')
            ->set_output(json_encode($user));
    }
}
