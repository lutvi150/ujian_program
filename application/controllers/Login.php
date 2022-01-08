<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');

    }

    public function index()
    {
        $data = null;
        $this->load->view('login', $data, false);

    }
    public function verifikasi(Type $var = null)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $checkAccount = $this->model->checkAccount($username, $password);
        if ($checkAccount == null) {
            $this->session->set_flashdata('error', 'Username dan password tidak cocok');
            redirect('login');
        } else {

            $array = array(
                'username' => $checkAccount->username,
                'role' => $checkAccount->role,
                'logged_in' => true,
                'id_user' => $checkAccount->id_user,
            );
            $this->session->set_userdata($array);
            if ($checkAccount->role == 'admin') {

                redirect('admin');

            } else {

                redirect('atlet');

            }
        }

    }
    public function logout(Type $var = null)
    {
        $this->session->sess_destroy();
        redirect('login');
    }
    public function makeAccount(Type $var = null)
    {

    }

}

/* End of file  Login.php */
