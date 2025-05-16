<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AuthFilter
{
    public function run()
    {
        $ci = &get_instance();
        if (!$ci->session->userdata('logged_in')) {
            redirect('login'); // Redirige a la página de login
        }
    }
}
