<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('email')) {
            redirect('admin');
        }
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';
    }

    public function index()
    {

        $data['title'] = 'Halaman Admin';
        $this->db->limit(3);
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['data_alumni'] = $this->db->get('data_alumni')->result_array();
        $data['pesan_alumni'] = $this->db->limit(5)->get('pesan_alumni')->result_array();
        $data['jml_siswa_1'] = $this->db->get_where('pendaftar_ppdb', ['gel' => 1])->num_rows();
        $data['jml_siswa_2'] = $this->db->get_where('pendaftar_ppdb', ['gel' => 2])->num_rows();
        $data['jml_siswa_0'] = $this->db->get_where('pendaftar_ppdb', ['verify_data' => 0])->num_rows();
        $data['gel'] = $this->db->get('gel_daftar')->row_array();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/adminmasuk', $data);
        $this->load->view('admin/footer');
    }

    public function update_gel()
    {
        $data = [
            'gelombang' => $this->input->post('gelombang')
        ];
        $this->db->set($data);
        $this->db->where('id', 1);
        $this->db->update('gel_daftar');
        redirect('user_admin');
    }

    public function data_alumni()
    {
        $data['title'] = 'Data Almuni';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_alumni');
        $this->load->view('admin/footer');
    }
    public function hapus_alumni($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('user_admin/data_alumni');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('data_alumni');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('user_admin/data_alumni');
        }
    }
    public function tampil($id)
    {
        $data = [
            'aktif' => 1
        ];
        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('pesan_alumni');
        $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
        redirect('user_admin/pesan_alumni');
    }


    public function hasil_un()
    {
        $data['title'] = 'Hasil UN';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $data['hasil_un'] = $this->db->get('hasil_un')->result_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/hasil_un', $data);
        $this->load->view('admin/footer');
    }

    public function upload_hasil_un()
    {
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'Uplaod UN';
         $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/upload_un');
        $this->load->view('admin/footer');
    }
    public function upload()
    {
        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $config['upload_path'] = realpath('excel');
        $config['allowed_types'] = 'xlsx|xls|csv';
        $config['max_size'] = '10000';
        $config['encrypt_name'] = true;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {

            //upload gagal
            $this->session->set_flashdata('notif', '<div class="alert alert-danger"><b>PROSES IMPORT GAGAL!</b> ' . $this->upload->display_errors() . '</div>>');
            //redirect halaman
            redirect('user_admin/hasil_un');
        } else {

            $data_upload = $this->upload->data();

            $excelreader     = new PHPExcel_Reader_Excel2007();
            $loadexcel         = $excelreader->load('excel/' . $data_upload['file_name']); // Load file yang telah diupload ke folder excel
            $sheet             = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

            $data = array();

            $numrow = 1;
            foreach ($sheet as $row) {
                if ($numrow > 1) {
                    array_push($data, array(
                        'nisn'      => $row['A'],
                        'nama'      => $row['B'],
                        'kelas'     => $row['C'],
                        'hasil'     => $row['D']
                    ));
                }
                $numrow++;
            }
            $this->db->insert_batch('hasil_un', $data);
            //delete file from server
            unlink(realpath('excel/' . $data_upload['file_name']));

            //upload success
            $this->session->set_flashdata('notif', '<div class="alert alert-success"><b>PROSES IMPORT BERHASIL!</b> Data berhasil diimport!</div>>');
            //redirect halaman
            redirect('user_admin/hasil_un');
        }
    }

    public function pesan_alumni()
    {
        $data['title'] = 'Pesan Alumni';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['pesan'] = $this->db->get('pesan_alumni')->result_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/pesan_alumni', $data);
        $this->load->view('admin/footer');
    }

    public function hapus_pesan($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('user_admin/pesan_alumni');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('pesan_alumni');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('user_admin/pesan_alumni');
        }
    }

    public function hapus_berita()
    {
        $data['title'] = 'Kelola Berita';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['ppdb'] = $this->db->get('ppdb')->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/hapus_berita', $data);
        $this->load->view('admin/footer');
    }

    public function hapus_berita_ok($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('user_admin/hapus_berita');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('ppdb');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('user_admin/hapus_berita');
        }
    }

    public function update_ppdb()
    {
        $data['title'] = 'Update PPDB';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();

        $data['ppdb'] = $this->db->get('ppdb')->result_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_ppdb', $data);
        $this->load->view('admin/footer');
    }

    public function hapus_un($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('user_admin/hasil_un');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('hasil_un');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('user_admin/hasil_un');
        }
    }
    public function update_berita_ppdb()

    {
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header');
        $this->load->view('admin/update_ppdb');
        $this->load->view('admin/footer');
        $data = [
            'judul' => $this->input->post('judul'),
            'isi_singkat' => $this->input->post('isi_singkat'),
            'isi' => $this->input->post('isi'),
            'waktu' => time()

        ];
        //cek jika ada gambar upload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '6028';
            $config['upload_path'] = './assets/gambar/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }


        $this->db->insert('ppdb', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berita telah ter Update</div>');
        redirect('user_admin/hapus_berita');
    }

    public function edit_berita($id)
    {
        $data['title'] = 'Edit Berita';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('id', $id);
        $data['ppdb'] = $this->db->get('ppdb')->result_array();
 $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/edit_berita', $data);
        $this->load->view('admin/footer');
    }

    public function edit_berita_upload()
    {

        $id          = $this->input->post('id');
        $judul          = $this->input->post('judul');
        $isi_singkat    = $this->input->post('isi_singkat');
        $isi            = $this->input->post('isi');


        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '6028';
            $config['upload_path'] = './assets/gambar/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('image', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $data = array(

            'id'         => $id,
            'judul'         => $judul,
            'isi_singkat'    => $isi_singkat,
            'isi'            => $isi,
            'waktu_update'   => time()


        );


        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('ppdb');

        $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Berita berhasil diganti. </div>');
        redirect('user_admin/hapus_berita');
    }

    public function kontak()
    {
        $data['title'] = 'kontak';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->order_by('id', 'DESC');
        $data['kontak'] = $this->db->get('kontak')->result_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/kontak', $data);
        $this->load->view('admin/footer');
    }

    public function hapus_kontak($id)
    {
        if ($id == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('user_admin/kontak');
        } else {
            $this->db->where('id', $id);
            $this->db->delete('kontak');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('user_admin/kontak');
        }
    }
    public function jawab($id)
    {
        $data['title'] = 'Jawab Pesan';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['kontak'] = $this->db->get_where('kontak', ['id' => $id])->row_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/kontak_jawab', $data);
        $this->load->view('admin/footer');
    }

    public function terjawab()
    {
        $id = $this->input->post('id');
        $email = $this->input->post('email');
        $isi = $this->input->post('isinya');

        $config['mailtype'] = 'html';
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.smainstindosmg.sch.id';
        $config['smtp_user'] = 'admin@smainstindosmg.sch.id';
        $config['smtp_pass'] = 'AdminInstindo123';
        $config['smtp_port'] = 465;
        $config['newline'] = "\r\n";

        $this->load->library('email', $config);

        $this->email->from('admin@smainstindosmg.sch.id', 'Admin SMA Instindo ( No- Reply )');
        $this->email->to($email);
        $this->email->subject('Balasan Pertanyaan.');
        $this->email->message($isi);

        if ($this->email->send()) {
            $data = array(
                'waktu_terjawab'   => time()
            );

            $this->db->set($data);
            $this->db->where('id', $id);
            $this->db->update('kontak');
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Terjawab dan Terkirim </div>');
            redirect('user_admin/kontak');
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" 
            role="alert">Gagal</div>');
            redirect('user_admin/kontak');
        }
    }

    public function data_siswa()
    {
        $data['title'] = 'Data Siswa';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('pendaftar_ppdb')->result_array();
        $data['jml_siswa'] = $this->db->get_where('pendaftar_ppdb')->num_rows();
        $data['siswa_konfirmasi'] = $this->db->get_where('pendaftar_ppdb', [
            'verify_data'       => 1,
            'verify_pembayaran' => 1
        ])->num_rows();
        $data['siswa_belum_konfirmasi'] = $this->db->get_where('pendaftar_ppdb', [
            'verify_data'       => 0,
            'verify_pembayaran' => 0
        ])->num_rows();
        $data['siswa_lengkap'] = $this->db->get_where('pendaftar_ppdb', [
            'benar'       => 1

        ])->num_rows();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();


        $this->load->view('admin/header', $data);
        $this->load->view('admin/data_siswa', $data);
        $this->load->view('admin/footer');
    }
    public function hapus_data_siswa($nis_siswa)
    {
        if ($nis_siswa == "") {
            $this->session->set_flashdata('error', "Data Anda Gagal Di Hapus");
            redirect('user_admin/data_siswa');
        } else {
            $this->db->where('nis_siswa', $nis_siswa);
            $this->db->delete('pendaftar_ppdb');
            $this->session->set_flashdata('sukses', "Data Berhasil Dihapus");
            redirect('user_admin/data_siswa');
        }
    }
    public function verify_data_siswa()
    {
        $data['title'] = 'Konfirmasi Data Siswa';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get('pendaftar_ppdb')->result_array();
       $data['gel'] = $this->db->get('gel_daftar')->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/verify_data_siswa', $data);
        $this->load->view('admin/footer');
    }
    public function halaman_verify_data_siswa($nis_siswa)
    {
        $data['title'] = 'Halaman Konfirmasi Data Siswa';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $this->db->where('nis_siswa', $nis_siswa);
        $data['siswa'] = $this->db->get('pendaftar_ppdb')->result_array();
        $data['ver_data'] = $this->db->get_where('pendaftar_ppdb', ['verify_data']);
        $data['ver_bayar'] = $this->db->get_where('pendaftar_ppdb', ['verify_bayar']);

           $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/halaman_verify_data_siswa', $data);
        $this->load->view('admin/footer');
    }

    public function konfirmasi_data($nis_siswa)
    {
        if ($nis_siswa == "") {
            $this->session->set_flashdata('error', "Tidak Berhasil");
            redirect('user_admin/verify_data_siswa');
        } else {

            $data = array(
                'verify_data'   => 1

            );

            $this->db->set($data);
            $this->db->where('nis_siswa', $nis_siswa);
            $this->db->update('pendaftar_ppdb');
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Data Berhasil Dikonfirmasi </div>');
            redirect('user_admin/halaman_verify_data_siswa/'.$nis_siswa);
        }
    }
    public function konfirmasi_pembayaran($nis_siswa)
    {
        if ($nis_siswa == "") {
            $this->session->set_flashdata('error', "Tidak Berhasil");
            redirect('user_admin/verify_data_siswa');
        } else {

            $data = array(
                'verify_pembayaran'   => 1

            );

            $this->db->set($data);
            $this->db->where('nis_siswa', $nis_siswa);
            $this->db->update('pendaftar_ppdb');
            $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Pembayaran Berhasil Dikonfirmasi </div>');
            redirect('user_admin/halaman_verify_data_siswa/'.$nis_siswa);
        }
    }

    public function verify_siswa()
    {
        $data['title'] = 'Data Siswa Terkonfirmasi';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['siswa'] = $this->db->get_where('pendaftar_ppdb', [
            'verify_data'       => 1,
            'verify_pembayaran' => 1
        ])->result_array();
 $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/verify_siswa', $data);
        $this->load->view('admin/footer');
    }

    public function cetak_siswa_konfirmasi()
    {
        $data['title'] = 'Cetak|Data';
        $data['siswa'] = $this->db->get_where('pendaftar_ppdb', [
            'verify_data'       => 1,
            'verify_pembayaran' => 1
        ])->result_array();
        $dompdf = new Dompdf();

        $html = $this->load->view('admin/cetak_siswa_konfirmasi', $data, true);

        $dompdf->load_html($html);
        // Setting ukuran dan orientasi kertas
        $dompdf->set_paper('A4', 'landscape');
        // Rendering dari HTML Ke PDF
        $dompdf->render();
        $dompdf->stream('Data_Siswa_Terkonfirmasi.pdf');
    }
    public function cetak_siswa()
    {
        $data['title'] = 'Cetak|Data';
        $data['siswa'] = $this->db->get('pendaftar_ppdb')->result_array();

        $dompdf = new Dompdf();

        $html = $this->load->view('admin/cetak_siswa', $data, true);

        $dompdf->load_html($html);
        // Setting ukuran dan orientasi kertas
        $dompdf->set_paper('A4', 'landscape');
        // Rendering dari HTML Ke PDF
        $dompdf->render();
        $dompdf->stream('Data_Siswa_PPDB.pdf');
    }

    public function berita_web()
    {
        $data['title'] = 'Berita Website';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['news'] = $this->db->get('berita')->result_array();
 $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/berita_web', $data);
        $this->load->view('admin/footer');
    }

    public function tambah_berita()
    {
        $data['title'] = 'Tambah Berita';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
 $data['gel'] = $this->db->get('gel_daftar')->row_array();
        $this->load->view('admin/header', $data);
        $this->load->view('admin/tambah_berita', $data);
        $this->load->view('admin/footer');
    }
    public function add_news()
    {
        $admin = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data = [
            'judul' => $this->input->post('judul'),
            'isi_singkat' => $this->input->post('isi_singkat'),
            'isi' => $this->input->post('isi'),
            'date_created' => time(),
            'admin' => $admin['nama']
        ];
        //cek jika ada gambar upload
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '100028';
            $config['upload_path'] = './assets/gambar/berita/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->insert('berita', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Berita berhasil ditambahkan </div>');
        redirect('user_admin/berita_web');
    }

    public function delete_news($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('berita');
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Berita berhasil di delete </div>');
        redirect('user_admin/berita_web');
    }
    public function kegiatan()
    {
        $data['title'] = 'Update Kegiatan';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['keg'] = $this->db->order_by('id', 'DESC')->get('kegiatan')->result_array();
 $data['gel'] = $this->db->get('gel_daftar')->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/kegiatan', $data);
        $this->load->view('admin/footer');
    }
    public function add_keg()
    {
        $user = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $judul = $this->input->post('judul');
        $keterangan = $this->input->post('keterangan');
        $data = [
            'judul' => $judul,
            'keterangan' => $keterangan,
            'date_created' => time(),
            'disetor' => $user['nama']
        ];
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size']     = '100028';
            $config['upload_path'] = './assets/gambar/berita/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->insert('kegiatan', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
            role="alert">Kegiatan berhasil ditambahkan </div>');
        redirect('user_admin/kegiatan');
    }
    public function delete_keg($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kegiatan');
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Kegiatan berhasil di delete </div>');
        redirect('user_admin/kegiatan');
    }
    public function prestasi()
    {
        $data['title'] = 'Prestasi';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['pres'] = $this->db->order_by('id', 'DESC')->get('prestasi')->result_array();
         $data['gel'] = $this->db->get('gel_daftar')->row_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/prestasi', $data);
        $this->load->view('admin/footer');
    }
    public function add_pres()
    {

        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $kejuaraan = $this->input->post('kejuaraan');
        $tahun = $this->input->post('tahun');
        $data = [
            'nama' => $nama,
            'kelas' => $kelas,
            'kejuaraan' => $kejuaraan,
            'tahun' => $tahun
        ];

        $this->db->insert('prestasi', $data);
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Info prestasi berhasil di delete </div>');
        redirect('user_admin/prestasi');
    }

    public function delete_pres($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('prestasi');
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Info prestasi berhasil di delete </div>');
        redirect('user_admin/prestasi');
    }
    
 public function updateVideo()
    {
        $data['title'] = 'Update Video';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['video'] = $this->db->order_by('id', 'DESC')->get('video')->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_video', $data);
        $this->load->view('admin/footer');
    }
    public function upload_vid()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'date_created' => time()
        ];
        $upload_image = $_FILES['file-video']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'mp4|mkv|jpg';
            $config['max_size']     = '1000000';
            $config['upload_path'] = './assets/video/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file-video')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('file_video', $new_image);
                
                $this->db->insert('video', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" 
                role="alert">Video berhasil di upload </div>');
                redirect('user_admin/updateVideo');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('user_admin/updateVideo');
            }
        }
    }

    public function delete_vid($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('video');
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Video berhasil di hapus  </div>');
        redirect('user_admin/updateVideo');
    }
    
      public function updateFoto()
    {
        $data['title'] = 'Update Foto';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['foto'] = $this->db->order_by('id', 'DESC')->get('foto')->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_foto', $data);
        $this->load->view('admin/footer');
    }
    public function upload_foto()
    {
        $data = [
            'date_created' => time()
        ];
        $upload_image = $_FILES['file']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'png|jpg|jpeg|jfif';
            $config['max_size']     = '1048000';
            $config['upload_path'] = './assets/video/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('file', $new_image);
                $this->db->insert('foto', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" 
                role="alert">Foto berhasil di upload </div>');
                redirect('user_admin/updateFoto');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('user_admin/updateFoto');
            }
        }
    }

    public function delete_foto($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('foto');
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Foto berhasil di hapus  </div>');
        redirect('user_admin/updateFoto');
    }
    
    public function updateGuru()
    {
        $data['title'] = 'Update Guru';
        $data['user'] = $this->db->get_where('admin', ['email' => $this->session->userdata('email')])->row_array();
        $data['guru'] = $this->db->order_by('id', 'DESC')->get('guru')->result_array();

        $this->load->view('admin/header', $data);
        $this->load->view('admin/update_guru', $data);
        $this->load->view('admin/footer');
    }
    public function upload_guru()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'title' => $this->input->post('title'),
            'user' => $this->input->post('user'),
            'date_created' => time()
        ];
        $upload_image = $_FILES['file']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'png|jpg|jpeg';
            $config['max_size']     = '1048000';
            $config['upload_path'] = './assets/guru/';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file')) {

                $new_image = $this->upload->data('file_name');
                $this->db->set('file', $new_image);
                $this->db->insert('guru', $data);
                $this->session->set_flashdata('message', '<div class="alert alert-success" 
                role="alert">Guru berhasil di tambahkan </div>');
                redirect('user_admin/updateGuru');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" 
                role="alert">' . $this->upload->display_errors() . '</div>');
                redirect('user_admin/updateGuru');
            }
        }
    }

    public function delete_guru($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('guru');
        $this->session->set_flashdata('message', '<div class="alert alert-success" 
        role="alert">Data Guru berhasil di hapus  </div>');
        redirect('user_admin/updateGuru');
    }
}
