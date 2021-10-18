<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'PPDB|Halaman Login';

        $this->form_validation->set_rules('nis_siswa', 'nis_siswa', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Login';
            $this->load->view('ppdb/header', $data);
            $this->load->view('ppdb/login', $data);
            $this->load->view('ppdb/footer');
        } else {

            $this->_login();
        }
    }
    private function _login()
    {
        $nis_siswa = $this->input->post('nis_siswa');
        $password  = $this->input->post('password');

        $admin = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $nis_siswa])->row_array();

        //adminnya Ada
        if ($admin) {

            //cek password
            if ($password == $admin['password']) {
                $data = [
                    'nis_siswa' => $admin['nis_siswa'],

                ];
                $this->session->set_userdata($data);

                redirect('ppdb/halaman_siswa');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Kamu Salah !!! </div>');
                redirect('auth');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun Belum Terdaftar </div>');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nis_siswa');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout / keluar.
			Silahkan login !!!</div>');
        redirect('auth');
    }
}
