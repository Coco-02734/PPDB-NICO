<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'Halaman Login';
            $this->load->view('admin/admin', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['email' => $email])->row_array();

        //adminnya Ada
        if ($admin) {
            //jika adminnya aktif
            if ($admin['is_active'] == 1) {
                //cek password
                if ($password == $admin['password']) {
                    $data = [
                        'email' => $admin['email'],
                        'role_id' => $admin['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($admin['role_id'] == 1) {
                        redirect('user_admin');
                    } else {

                        redirect('user');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Kamu Salah !!! </div>');
                    redirect('admin');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Di Aktivasi. Emailmu !!! </div>');
                redirect('admin');
            }
        } else {

            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email Belum Terdaftar </div>');
            redirect('admin');
        }
    }


    public function logout()
    {
        $this->session->unset_userdata('email');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah logout / keluar.
			Silahkan login !!!</div>');
        redirect('admin');
    }
}
