<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('anggota_model', 'anggota');
        $this->load->model('dashboard_model', 'dashboard');
    }

    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['anggota'] = $this->dashboard->anggota();
        $data['menunggu_aktivasi'] = $this->dashboard->menunggu_aktivasi();
        $data['anggota_aktif'] = $this->dashboard->anggota_aktif();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('templates/footer');
    }

    public function Anggota()
    {
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['users'] = $this->anggota->getAnggota();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('admin/anggota/index', $data);
        $this->load->view('templates/footer');
    }

    public function delete($id)
    {
        $user    = $this->anggota->getDetailUser($id);
        $this->anggota->deleteUser($id);
        $this->session->set_flashdata('message', 'Data anggota berhasil dihapus.');

        if ($user['position_id'] == 2) {
            redirect(base_url('admin/anggota/index'));
        }
    }
}
