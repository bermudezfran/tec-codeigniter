<?php

class AuthController extends CI_Controller
{
    public function login()
    {
        if ($this->input->method() === 'post') {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            // Valida credenciales (ejemplo básico)
            if ($username === 'admintrinche' && $password === 'guitarraeterna15.') {
                $this->session->set_userdata('logged_in', true);
                redirect('events');
            } else {
                $data['error'] = 'Credenciales inválidas';
            }
        }

        $this->load->view('auth/login', isset($data) ? $data : null);
    }

    public function logout()
    {
        $this->session->unset_userdata('logged_in');
        redirect('auth/login');
    }
}
