<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Awal extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Home';
        $this->db->limit(1);
        $this->db->order_by('id', 'DESC');
        $data['ppdb'] = $this->db->get('ppdb')->result_array();

        $this->load->view('template/navbar', $data);
        $this->load->view('awal', $data);
        $this->load->view('template/footer');
    }

    public function info()
    {
        $data['title'] = 'Info PPDB';
        $this->db->order_by('id', 'DESC');
        $data['ppdb'] = $this->db->get('ppdb')->result_array();
        $this->load->view('template/navbar', $data);

        $this->load->view('info', $data);
        $this->load->view('template/footer');
    }

    public function berita_ppdb($id)
    {
        $data['title'] = 'Berita PPDB';

        $this->db->where('id', $id);
        $data['berita'] = $this->db->get('ppdb')->result_array();

        $this->load->view('template/navbar', $data);

        $this->load->view('berita_ppdb', $data);
        $this->load->view('template/footer');
    }

    public function kontak()
    {
        $data['title'] = 'kontak';

        $this->load->view('template/navbar', $data);
        $this->load->view('kontak', $data);
        $this->load->view('template/footer');
    }
    public function kirim_tanya()
    {
        $nama          = $this->input->post('nama');
        $email          = $this->input->post('email');
        $isi            = $this->input->post('isi');

        $data = array(

            'nama'        => $nama,
            'email'       => $email,
            'isi'         => $isi,
            'waktu'       => time()
        );

        $this->db->insert('kontak', $data);
        $email =  $this->input->post('email');


        // Konfigurasi email
        $config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'mail.smainstindosmg.sch.id',
            'smtp_user' => 'no-reply@smainstindosmg.sch.id',  // Email gmail
            'smtp_pass'   => 'Instindo123',  // Password gmail
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
        $this->email->from('no-reply@smainstindosmg.sch.id', 'Sistem SMA Instindo SMG');
        // Email penerima
        $this->email->to($email); // Ganti dengan email tujuan
        // Lampiran email, isi dengan url/path file
        $this->email->attach('');
        // Subject email
        $this->email->subject('Terimakasih Telah Mingirim Pesan');

        // Isi email
        $this->email->message('
        Terimakasih telah mengirim pesan atau pertanyaan ke kami. Mohon menunggu balasan admin yah :)');
        // Tampilkan pesan sukses atau error 
        if ($this->email->send()) {

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Pesan Terkirim. </div>');
            redirect('awal/kontak');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Pesan Gagal Terkirim. </div>');
            redirect('awal/kontak');
        }
    }
    public function pengumuman()
    {
        $data['title'] = 'Pengumuman';

        $this->load->view('template/navbar', $data);
        $this->load->view('pengumuman', $data);
        $this->load->view('template/footer');
    }

    public function pendaftaran()
    {
        $data['title'] = 'pendaftaran';

        $this->load->view('template/navbar', $data);
        $this->load->view('pendaftaran', $data);
        $this->load->view('template/footer');
    }
}
