<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    public function get_user_by_id($user_id)
    {
        $query = $this->db->get_where('users', ['id' => $user_id]);
        return $query->row_array(); // Retorna el usuario como un arreglo
    }
}
