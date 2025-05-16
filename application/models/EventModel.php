<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventModel extends CI_Model
{
    public function getAllEvents()
    {
        return $this->db->get('events')->result_array();
    }

    public function getFeaturedEvents()
    {
        return $this->db->where('is_featured', 1)->get('events')->result_array();
    }

    public function getEventById($id)
    {
        return $this->db->where('id', $id)->get('events')->row_array();
    }

    public function createEvent($data)
    {
        $this->db->insert('events', $data);
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
