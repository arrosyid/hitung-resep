<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function index()
  {
    $data['tittle'] = 'HITUNG RESEP';
    $data['subtittle'] = 'MENGHITUNG RESEP';
    $this->load->view('templates/header', $data);
    $this->load->view('v_HitungResep');
    $this->load->view('templates/footer');
  }

  public function daftarBahan()
  {
    $data['tittle'] = 'Daftar Bahan';
    $data['subtittle'] = 'Daftar Bahan';
    $this->load->view('templates/header', $data);
    $this->load->view('v_DaftarBahan');
    $this->load->view('templates/footer');
  }

  public function daftarResep()
  {
    $data['tittle'] = 'Daftar Resep';
    $data['subtittle'] = 'Daftar Resep';
    $this->load->view('templates/header', $data);
    $this->load->view('v_DaftarResep');
    $this->load->view('templates/footer');
  }

  public function pembukuan()
  {
    $data['tittle'] = 'Pembukuan';
    $data['subtittle'] = 'Catatan Pemesanan Konsumen';
    $this->load->view('templates/header', $data);
    $this->load->view('v_Pembukuan');
    $this->load->view('templates/footer');
  }

  public function tambahPesanan()
  {
    $data['tittle'] = 'Tambah Pesanan';
    $data['subtittle'] = 'Tambah Pesanan';
    $this->load->view('templates/header', $data);
    $this->load->view('v_TambahPesanan');
    $this->load->view('templates/footer');
  }

  public function tambahMenu()
  {
    $data['tittle'] = 'Tambah Menu';
    $data['subtittle'] = 'Tambah Menu';
    $this->load->view('templates/header', $data);
    $this->load->view('v_TambahMenu');
    $this->load->view('templates/footer');
  }

  public function tambahResep()
  {
    $data['tittle'] = 'Tambah Resep';
    $data['subtittle'] = 'Tambah Resep';
    $this->load->view('templates/header', $data);
    $this->load->view('v_TambahResep');
    $this->load->view('templates/footer');
  }

  public function tambahBahan()
  {
    $data['tittle'] = 'Tambah Bahan';
    $data['subtittle'] = 'Tambah Bahan';

    $this->form_validation->set_rules('nm_bahan', 'Nama Bahan', 'required|trim|is_unique[tb_bahan.nm_bahan]', [
      'is_unique' => 'Bahan Sudah Terdaftar, Silahkan Isi Bahan Lain'
    ]);
    $this->form_validation->set_rules('harga_perkg', 'Harga Per-KG/L', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_TambahBahan');
      $this->load->view('templates/footer');
    } else {
      $data_bahan = [
        'nm_bahan' => htmlspecialchars($this->input->post('nm_bahan')),
        'harga_perkg' => htmlspecialchars($this->input->post('harga_perkg')),
      ];
      // var_dump($data_bahan);
      // die;

      if ($this->db->insert('tb_bahan', $data_bahan)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil Menambah Bahan ' . $data_bahan['nm_bahan'] . '</div>'
        );
        redirect('admin/daftarBahan');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Menambah Bahan</div>'
        );
        redirect('admin/daftarBahan');
      }
    }
  }

  public function checkout()
  {
    // setelah input pesanan langsung masuk halaman check out
    $data['tittle'] = 'check out';
    $data['subtittle'] = 'Konfirmasi Pembayaran';
    $this->load->view('templates/header', $data);
    $this->load->view('v_Checkout');
    $this->load->view('templates/footer');
  }
}
