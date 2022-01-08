<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model', 'model');
        if ($this->session->userdata('logged_in') != true) {
            $this->session->set_flashdata('error', 'Akses di tolak, silahkan login terlebih dahulu');
            redirect('login');
        }
        if ($this->session->userdata('role') != 'admin') {
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
        $data['total_pelatih'] = $this->model->getTotalPelatih();
        $data['total_atlet'] = $this->model->getTotalAtlet();
        $this->menu('admin/dashboard', $data);
    }
    public function cabangOlahRaga(Type $var = null)
    {
        $data['title'] = 'Cabang Olah Raga';
        $cabang = $this->model->getData('table_cabang_olahraga');
        if ($cabang !== null) {
            foreach ($cabang as $key => $value) {
                $getCabang[] = [
                    'nama_cabang_olahraga' => $value->nama_cabang_olahraga,
                    'jumlah_atlet' => $this->model->hitungAtlePercabang($value->id_cabang),
                ];
            }
            $data['cabang'] = json_decode(json_encode($getCabang));
        }
        $this->menu('admin/cabang_olah_raga', $data);
        // echo json_encode($data);
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
    public function cetak_cabang(Type $var = null)
    {
        $data['title'] = 'Cabang Olah Raga';
        $cabang = $this->model->getData('table_cabang_olahraga');
        if ($cabang !== null) {
            foreach ($cabang as $key => $value) {
                $getCabang[] = [
                    'nama_cabang_olahraga' => $value->nama_cabang_olahraga,
                    'jumlah_atlet' => $this->model->hitungAtlePercabang($value->id_cabang),
                ];
            }
            $data['cabang'] = json_decode(json_encode($getCabang));
        }
        $this->load->view('cetak/cetak_cabang', $data);
        // echo json_encode($data);

    }

}

/* End of file  Admin.php */
