<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Atlet extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
        if ($this->session->userdata('logged_in') != true) {
            $this->session->set_flashdata('error', 'Akses di tolak, silahkan login terlebih dahulu');
            redirect('login');
        }
        if ($this->session->userdata('role') != 'atlet') {
            $this->session->set_flashdata('error', 'Akses di tolak, silahkan login terlebih dahulu');
            redirect('login');
        }
    }
    public function menu($link, $data)
    {
        $this->load->view('layout/header', $data, false);
        $this->load->view('layout/sidebar', $data, false);
        $this->load->view($link, $data, false);
        $this->load->view('layout/footer', $data, false);

    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['total_jadwal'] = $this->model->total('table_latihan');
        $data['total_event'] = $this->model->total('table_event');
        $this->menu('atlet/dashboard', $data);
    }
    public function latihan(Type $var = null)
    {
        $data['title'] = 'Latihan';
        $data['latihan'] = $this->model->getdata('table_latihan');
        $this->menu('atlet/latihan', $data);
    }
    public function event(Type $var = null)
    {
        $data['title'] = 'Event';
        $data['event'] = $this->model->getdata('table_event');
        $this->menu('atlet/event', $data);
    }
    public function profil(Type $var = null)
    {
        $id = $this->session->userdata('id_user');
        $data['profil'] = $this->model->findDataAtlet($id);
        $data['title'] = 'Profil';
        $this->menu('atlet/profil', $data);
        // echo json_encode($data);
    }

}

/* End of file  Atlet.php */
