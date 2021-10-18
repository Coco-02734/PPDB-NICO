<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ppdb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('nis_siswa', 'nis_siswa', 'required|trim|is_unique[pendaftar_ppdb.nis_siswa]', [
            'is_unique' => 'Maaf NISN Telah Terdaftar',
            'required' => 'Isi NISN Anda !'
        ]);
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Form Pendaftaran';
            $data['gel'] = $this->db->get('gel_daftar')->row_array();

            $this->load->view('ppdb/header', $data);
            $this->load->view('ppdb/pendaftaran', $data);
            $this->load->view('ppdb/footer');
        } else {
            $this->daftar();
        }
    }

    public function daftar()
    {
        $nis_siswa           = $this->input->post('nis_siswa');
        $nama                = $this->input->post('nama');
        $asal_smp            = $this->input->post('asal_smp');
        $email               = $this->input->post('email');
        $jenis_kelamin       = $this->input->post('jenis_kelamin');
        $password            = $this->input->post('password');
        $gel                 = $this->input->post('gel');

        $data = array(
            'nis_siswa'         => $nis_siswa,
            'nama'              => $nama,
            'asal_smp'          => $asal_smp,
            'email'             => $email,
            'jenis_kelamin'     => $jenis_kelamin,
            'password'          => $password,
            'image'             => 'default.png',
            'verify_data'       => 0,
            'verify_pembayaran' => 0,
            'gel'               => $gel,
            'date_created'      => time()
        );

        $this->db->insert('pendaftar_ppdb', $data);
        $email =  $this->input->post('email');


        // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'mail.smainstindosmg.sch.id',
            'smtp_user' => 'ppd@smainstindosmg.sch.id',  // Email gmail
            'smtp_pass'   => 'PPDinstindo123',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];


        // Load library email dan konfigurasinya
        $this->load->library('email', $config);
        //format HTML
        $this->email->set_mailtype("html");
        // Email dan nama pengirim
        $this->email->from('ppd@smainstindosmg.sch.id', 'Lengkapi Data');
        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan
        // Lampiran email, isi dengan url/path file
        $this->email->attach('');
        // Subject email
        $this->email->subject('Lengkapi Data Formulir Pendaftaran');

        // Isi email
        $this->email->message('
        Hai, terimakasih telah melakukan pendaftaran akun PPD SMA Institut Indonesia, Yuk segera lengkapi formulir pendaftaran kamu.');
        // Tampilkan pesan sukses atau error 
        if ($this->email->send()) {

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil terdaftar</div');
            redirect('ppdb/konfirmasi');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Anda tidak berhasil terdaftar</div');
            redirect('ppdb/konfirmasi');
        }
    }

    public function konfirmasi()
    {
        $data['title'] = 'Konfirmasi';


        $this->load->view('ppdb/header', $data);
        $this->load->view('ppdb/konfirmasi', $data);
        $this->load->view('ppdb/footer');
    }

    public function halaman_siswa()
    {
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();

        $this->load->view('ppdb/template/header', $data);
        $this->load->view('ppdb/template/sidebar', $data);
        $this->load->view('ppdb/halaman_siswa', $data);
        $this->load->view('ppdb/template/footer');
    }
}
