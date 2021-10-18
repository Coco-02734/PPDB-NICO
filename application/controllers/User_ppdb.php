<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_ppdb extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('nis_siswa')) {
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Jangan Nakal Ya !!!</div>');
            redirect('auth');
        }
    }

    public function index()
    {
        $data['title'] = 'Halaman Utama';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();
        $data['cp'] = $this->db->get('cp_ppdb')->result_array();

        $this->load->view('ppdb/template/header', $data);
        $this->load->view('ppdb/template/sidebar', $data);
        $this->load->view('ppdb/halaman_siswa', $data);
        $this->load->view('ppdb/template/footer');
    }
    public function data()
    {
        $data['title'] = 'Update Data';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();

        $this->load->view('ppdb/template/header', $data);
        $this->load->view('ppdb/template/sidebar', $data);
        $this->load->view('ppdb/data', $data);
        $this->load->view('ppdb/template/footer');
    }

    public function update_data()
    {
        $nis_siswa          = $this->input->post('nis_siswa');
        $nama               = $this->input->post('nama');
        $status             = $this->input->post('status');
        $tempat_lahir       = $this->input->post('tempat_lahir');
        $tgl_lahir          = $this->input->post('tgl_lahir');
        $umur               = $this->input->post('umur');
        $jenis_kelamin      = $this->input->post('jenis_kelamin');
        $agama              = $this->input->post('agama');
        $no_tlpn            = $this->input->post('no_tlpn');
        $asal_smp           = $this->input->post('asal_smp');
        $kecamatan_smp      = $this->input->post('kecamatan_smp');
        $kota_smp           = $this->input->post('kota_smp');
        $provinsi_smp       = $this->input->post('provinsi_smp');
        // $no_ijazah          = $this->input->post('no_ijazah');
        $nama_ortu          = $this->input->post('nama_ortu');
        $no_tlpn_ortu       = $this->input->post('no_tlpn_ortu');
        $alamat             = $this->input->post('alamat');
        $nama_wali          = $this->input->post('nama_wali');
        $alamat_wali        = $this->input->post('alamat_wali');
        $no_wali            = $this->input->post('no_wali');
        $sudah_daftar_di    = $this->input->post('sudah_daftar_di');
        $benar              = $this->input->post('benar');

        $data = array(
            'nis_siswa'         => $nis_siswa,
            'nama'              => $nama,
            'status'            => $status,
            'tempat_lahir'      => $tempat_lahir,
            'tgl_lahir'         => $tgl_lahir,
            'umur'              => $umur,
            'jenis_kelamin'     => $jenis_kelamin,
            'agama'             => $agama,
            'no_tlpn'           => $no_tlpn,
            'asal_smp'          => $asal_smp,
            'kecamatan_smp'     => $kecamatan_smp,
            'kota_smp'          => $kota_smp,
            'provinsi_smp'      => $provinsi_smp,
            'no_ijazah'         => "-",
            'nama_ortu'         => $nama_ortu,
            'no_tlpn_ortu'      => $no_tlpn_ortu,
            'alamat'            => $alamat,
            'nama_wali'         => $nama_wali,
            'alamat_wali'       => $alamat_wali,
            'no_wali'           => $no_wali,
            'sudah_daftar_di'   => $sudah_daftar_di,
            'benar'             => $benar
        );
        $this->db->set($data);
        $this->db->where('nis_siswa', $nis_siswa);
        $this->db->update('pendaftar_ppdb');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anda Telah Tersimpan</div>');
        redirect('user_ppdb/data');
    }

    public function pembayaran()
    {
        $data['title'] = 'Cetak Formulir';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();
        $data['cp'] = $this->db->get('cp_ppdb')->result_array();

        $this->load->view('ppdb/template/header', $data);
        $this->load->view('ppdb/template/sidebar', $data);
        $this->load->view('ppdb/pembayaran', $data);
        $this->load->view('ppdb/template/footer');
    }

    public function cetak_formulir()
    {
        $data['title'] = 'Cetak Formulir_';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();

        $this->load->view('ppdb/cetak_formulir', $data);
    }
    public function cetak_pembayaran()
    {
        $data['title'] = 'Cetak Pembayaran_';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();

        $this->load->view('ppdb/cetak_pembayaran', $data);
    }

    public function ubah_password()
    {
        $data['title'] = 'Ubah Password';
        $data['user'] = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();

        $this->load->view('ppdb/template/header', $data);
        $this->load->view('ppdb/template/sidebar', $data);
        $this->load->view('ppdb/ubah_password', $data);
        $this->load->view('ppdb/template/footer');
    }

    public function ubah_pass()
    {
        $siswa = $this->db->get_where('pendaftar_ppdb', ['nis_siswa' => $this->session->userdata('nis_siswa')])->row_array();
        $nis_siswa = $siswa['nis_siswa'];
        $password = $this->input->post('password');

        $data = ['password' => $password];
        $this->db->set($data);
        $this->db->where('nis_siswa', $nis_siswa);
        $this->db->update('pendaftar_ppdb');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Anda Telah Tersimpan</div>');
        redirect('user_ppdb/ubah_password');
    }
}
