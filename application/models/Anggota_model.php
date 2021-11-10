<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anggota_model extends CI_Model
{

    public function getAnggota()
    {
        $this->db->select('user.*, positions.position_name');
        $this->db->from('user');
        $this->db->join('positions', 'user.position_id = positions.id_positions');
        $this->db->where('position_id', 2);
        return $this->db->get()->result_array();
    }

    public function getDetailUser($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getPosition()
    {
        return $this->db->get('positions')->result_array();
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('user');
    }
}

/* End of file ModelName.php */
