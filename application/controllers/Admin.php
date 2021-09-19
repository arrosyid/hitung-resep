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
    $this->load->view('templates/header', $data);
    $this->load->view('v_TambahBahan');
    $this->load->view('templates/footer');
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
