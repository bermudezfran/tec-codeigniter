<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventModel extends CI_Model
{
    public function getAllEvents()
{
    return $this->db
                ->order_by('display_order', 'ASC')
                ->order_by('event_date',    'ASC')
                ->get('events')
                ->result_array();
}


    public function getFeaturedEvents()
    {
        return $this->db->where('is_featured', 1)->get('events')->result_array();
    }

    public function getEventById($id)
{
    $event = $this->db
                  ->where('id', $id)
                  ->get('events')
                  ->row_array();

    // Si no viene display_order, lo forzamos a 0
    if ($event && ! isset($event['display_order'])) {
        $event['display_order'] = 0;
    }

    return $event;
}


    public function createEvent(array $data)
{
    // Si no vino display_order o es vacío, lo auto-asignamos
    if (empty($data['display_order'])) {
        // Sacamos el máximo display_order del mismo tipo (destacados o no)
        $this->db
             ->select_max('display_order')
             ->where('is_featured', $data['is_featured'] ?? 0);
        $row = $this->db->get('events')->row();

        $max = isset($row->display_order) ? (int)$row->display_order : 0;
        $data['display_order'] = $max + 1;
    }

    // Ahora insertamos con display_order correcto
    return $this->db->insert('events', $data);
}


    public function updateEvent($id, $data)
    {
        $this->db->where('id', $id)->update('events', $data);
    }

    public function deleteEvent($id)
    {
        $this->db->where('id', $id)->delete('events');
    }
}
