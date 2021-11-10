<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard_model extends CI_Model
{

    public function anggota()
    {
        $this->db->select('user.*, positions.position_name');
        $this->db->from('user');
        $this->db->join('positions', 'user.position_id = positions.id_positions');
        $this->db->where('position_id', 2);
        return $this->db->get()->num_rows();
    }

    public function anggota_aktif()
    {
        $this->db->select('user.*, positions.position_name');
        $this->db->from('user');
        $this->db->join('positions', 'user.position_id = positions.id_positions');
        $this->db->where('position_id', 2);
        return $this->db->get()->num_rows();
    }

    public function menunggu_aktivasi()
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('is_active', 0);
        return $this->db->get()->num_rows();
    }
}
