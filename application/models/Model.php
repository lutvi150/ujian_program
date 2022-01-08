<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Model extends CI_Model
{

    public function checkAccount($username, $password)
    {
        $this->db->select('*');
        $this->db->from('table_user');
        $this->db->where('username', $username);
        $this->db->where('password', $password);
        $query = $this->db->get();
        return $query->row();
    }
    public function emtyDatabase($table)
    {
        $this->db->empty_table($table);
    }
    public function getTotalPelatih(Type $var = null)
    {
        $this->db->select('*');
        $this->db->from('table_pelatih');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function getTotalAtlet(Type $var = null)
    {
        $this->db->select('*');
        $this->db->from('table_atlet');
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function total($table)
    {
        return $this->db->from($table)->count_all_results();

    }
    public function getData($table)
    {
        return $this->db->get($table)->result();
    }
    public function findDataAtlet($id)
    {
        $this->db->from('table_atlet');
        $this->db->where('table_atlet.id_user', $id);
        $this->db->join('table_cabang_olahraga', 'table_atlet.id_cabang_olahraga = table_cabang_olahraga.id_cabang', 'left');
        $this->db->join('table_pelatih', 'table_atlet.id_pelatih = table_pelatih.id_palatih', 'left');

        return $this->db->get()->row();

    }
    public function hitungAtlePercabang($idCabang)
    {
        $this->db->from('table_atlet');
        $this->db->where('id_cabang_olahraga', $idCabang);
        return $this->db->count_all_results();
    }

}

/* End of file Model.php */
