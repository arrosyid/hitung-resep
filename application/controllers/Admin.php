<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Bahan_model');
    $this->load->model('Menu_model');
    $this->load->model('Pembukuan_model');
    $this->load->model('Pesanan_model');
    $this->load->model('Resep_model');
  }
  public function index()
  {
    $data['tittle'] = 'HITUNG RESEP';
    $data['subtittle'] = 'MENGHITUNG RESEP';

    // ajax
    $data['url_ajax'] = base_url('admin/ajax');
    $data['data_menu_ajax'] = 'get_pesanan';
    $data['id_ajax'] = 'id_pesanan';
    $data['html_ajax'] = '#detailPesanan';
    $data['modal_ajax'] = '#editPesanan';

    // model
    $data['pesanan'] = $this->Pesanan_model->getAllPesanan();

    $this->form_validation->set_rules('nm_pemesan', 'Nama Pemesan', 'required|trim',);
    $this->form_validation->set_rules('alamat_pengiriman', 'Alamat Pengiriman', 'required|trim');
    $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim',);
    $this->form_validation->set_rules('jml_porsi', 'Jumlah Porsi', 'required|trim',);
    $this->form_validation->set_rules('menu', 'Menu Utama', 'required|trim',);
    $this->form_validation->set_rules('sayur', 'Sayur', 'required|trim',);
    $this->form_validation->set_rules('menu_pelengkap', 'Menu Pelengkap', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_HitungResep');
      $this->load->view('templates/footer');
    } else {
      $date = $this->input->post('tgl_pesanan', true);
      $time = $this->input->post('waktu', true);
      $dateTime = strtotime($time . $date);
      // var_dump(date('G:i d-m-Y', $dateTime));
      // die;
      $id = $this->input->post('id_pesanan', true);
      $data_pesanan = [
        'id_pesanan' => $id,
        'nm_pemesan' => htmlspecialchars($this->input->post('nm_pemesan')),
        'alamat_pengiriman' => strtoupper(htmlspecialchars($this->input->post('alamat_pengiriman'))),
        'no_hp' => htmlspecialchars($this->input->post('no_hp')),
        'jml_porsi' => htmlspecialchars($this->input->post('jml_porsi')),
        'menu' => htmlspecialchars($this->input->post('menu')),
        'sayur' => htmlspecialchars($this->input->post('sayur')),
        'menu_pelengkap' => htmlspecialchars($this->input->post('menu_pelengkap')),
        'menu_tambahan' => htmlspecialchars($this->input->post('menu_tambahan')),
        'tgl_pesanan' => $dateTime,
      ];
      // var_dump($data_pesanan);
      // die;

      if ($this->Pesanan_model->updatePesananById($id, $data_pesanan)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Berhasil Menambah Pesanan ' . $data_pesanan['nm_pemesan'] . '</div>'
        );
        redirect('admin');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Gagal Menambah Pesanan</div>'
        );
        redirect('admin');
      }
    }
  }

  public function pembukuan()
  {
    $data['tittle'] = 'Pembukuan';
    $data['subtittle'] = 'Catatan Pemesanan Konsumen';

    // ajax
    $data['url_ajax'] = base_url('admin/ajax');
    $data['data_menu_ajax'] = 'get_pembukuan';
    $data['id_ajax'] = 'id_pembukuan';
    $data['html_ajax'] = '#detailPembukuan';
    $data['modal_ajax'] = '#editPembukuan';

    // model
    $data['pembukuan'] = $this->Pembukuan_model->getAllPembukuan();

    $this->form_validation->set_rules('dp', 'Uang Muka/DP', 'required|trim');
    $this->form_validation->set_rules('biaya_tambahan', 'Biaya Tambahan', 'required|trim');
    $this->form_validation->set_rules('biaya_produksi', 'Biaya Produksi', 'required|trim');

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_Pembukuan');
      $this->load->view('templates/footer');
    } else {
      $id = $this->input->post('id_pembukuan', true);
      $data_pembukuan = [
        'id_pembukuan' => $id,
        'dp' => htmlspecialchars($this->input->post('dp', true)),
        'biaya_tambahan' => htmlspecialchars($this->input->post('biaya_tambahan', true)),
        'biaya_produksi' => htmlspecialchars($this->input->post('biaya_produksi', true)),
      ];
      // var_dump($data_pembukuan);
      // die;

      if ($this->Pembukuan_model->updatePembukuanById($id, $data_pembukuan)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil Menambah Biaya Pembukuan</div>'
        );
        redirect('admin/pembukuan');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Menambah Biaya Pembukuan</div>'
        );
        redirect('admin/pembukuan');
      }
    }
  }

  public function daftarMenu()
  {
    $data['tittle'] = 'Daftar Menu';
    $data['subtittle'] = 'Daftar Menu';

    // ajax menu
    $data['url_ajax'] = base_url('admin/ajax');
    $data['data_menu_ajax'] = 'get_menu';
    $data['id_ajax'] = 'id_menu';
    $data['html_ajax'] = '#detailMenu';
    $data['modal_ajax'] = '#editMenu';

    // model
    $data['menu'] = $this->Menu_model->getAllMenu();

    $this->form_validation->set_rules('nm_menu', 'Nama Menu', 'required|trim');
    $this->form_validation->set_rules('jml_porsi', 'Harga Per-KG/L', 'required|trim',);
    $this->form_validation->set_rules('markup', 'Persentase Keuntungan', 'required|trim|max_length[3]',);
    $this->form_validation->set_rules('jenis_sajian', 'Jenis Sajian', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_DaftarMenu');
      $this->load->view('templates/footer');
    } else {
      $id = $this->input->post('id_menu', true);
      $data_menu = [
        'id_menu' => $id,
        'nm_menu' => htmlspecialchars($this->input->post('nm_menu')),
        'jml_porsi' => htmlspecialchars($this->input->post('jml_porsi')),
        'markup' => htmlspecialchars($this->input->post('markup')),
        'jenis_sajian' => htmlspecialchars($this->input->post('jenis_sajian')),
      ];
      // var_dump($data_menu);
      // die;

      if ($this->Menu_model->updateMenuById($id, $data_menu)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil Menambah Menu ' . $data_menu['nm_menu'] . '</div>'
        );
        redirect('admin/daftarMenu');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Menambah Menu</div>'
        );
        redirect('admin/daftarMenu');
      }
    }
  }

  public function daftarBahan()
  {
    $data['tittle'] = 'Daftar Bahan';
    $data['subtittle'] = 'Daftar Bahan';

    // ajax
    $data['url_ajax'] = base_url('admin/ajax');
    $data['data_menu_ajax'] = 'get_bahan';
    $data['id_ajax'] = 'id_bahan';
    $data['html_ajax'] = '#detailBahan';
    $data['modal_ajax'] = '#editBahan';

    // model
    $data['bahan'] = $this->Bahan_model->getAllBahan();

    $this->form_validation->set_rules('nm_bahan', 'Nama Bahan', 'required|trim');
    $this->form_validation->set_rules('harga_perkg', 'Harga Per-KG/L', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_DaftarBahan');
      $this->load->view('templates/footer', $data);
    } else {
      $id = $this->input->post('id_bahan', true);
      $data_bahan = [
        'id_bahan' => $id,
        'nm_bahan' => htmlspecialchars($this->input->post('nm_bahan')),
        'harga_perkg' => htmlspecialchars($this->input->post('harga_perkg')),
      ];
      // var_dump($data_bahan);
      // die;

      if ($this->Bahan_model->updateBahanById($id, $data_bahan)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil Mengedit Bahan ' . $data_bahan['nm_bahan'] . '</div>'
        );
        redirect('admin/daftarBahan');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Mengedit Bahan</div>'
        );
        redirect('admin/daftarBahan');
      }
    }
  }

  public function daftarResep()
  {
    $data['tittle'] = 'Daftar Resep';
    $data['subtittle'] = 'Daftar Resep';

    // ajax
    $data['url_ajax'] = base_url('admin/ajax');
    $data['data_menu_ajax'] = 'get_resep';
    $data['id_ajax'] = 'id_resep';
    $data['html_ajax'] = '#detailResep';
    $data['modal_ajax'] = '#editResep';

    // model
    $data['resep'] = $this->Resep_model->getAllResep();

    $this->form_validation->set_rules('id_bahan', 'Nama Bahan', 'required|trim',);
    $this->form_validation->set_rules('volume_bahan', 'Volume Bahan (g/ml)', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_DaftarResep');
      $this->load->view('templates/footer');
    } else {
      $id = $this->input->post('id_resep', true);
      $data_resep = [
        'id_resep' => $id,
        'id_bahan' => htmlspecialchars($this->input->post('id_bahan')),
        'volume_bahan' => htmlspecialchars($this->input->post('volume_bahan')),
      ];
      // var_dump($id);
      // die;
      $bahan = $this->Bahan_model->getBahanByType('id_bahan', $data_resep['id_bahan']);

      if ($this->Resep_model->updateResepByType('id_resep', $data_resep, $id)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Berhasil Mengedit Resep pada Bahan ' . $bahan['nm_bahan'] . '</div>'
        );
        redirect('admin/daftarResep');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Gagal Mengedit Resep</div>'
        );
        redirect('admin/daftarResep');
      }
    }
  }

  public function tambahPesanan()
  {
    $data['tittle'] = 'Tambah Pesanan';
    $data['subtittle'] = 'Tambah Pesanan';

    $data['menu_utama'] = $this->Menu_model->getMenuByType('jenis_sajian', 'MENU UTAMA');
    $data['sayur'] = $this->Menu_model->getMenuByType('jenis_sajian', 'SAYUR');
    $data['menu_tambahan'] = $this->Menu_model->getMenuByType('jenis_sajian', 'MENU TAMBAHAN');
    $data['menu_pelengkap'] = $this->Menu_model->getMenuByType('jenis_sajian', 'MENU PELENGKAP');

    $this->form_validation->set_rules('nm_pemesan', 'Nama Pemesan', 'required|trim',);
    $this->form_validation->set_rules('alamat_pengiriman', 'Alamat Pengiriman', 'required|trim');
    $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|trim',);
    $this->form_validation->set_rules('jml_porsi', 'Jumlah Porsi', 'required|trim',);
    $this->form_validation->set_rules('menu', 'Menu Utama', 'required|trim',);
    $this->form_validation->set_rules('sayur', 'Sayur', 'required|trim',);
    $this->form_validation->set_rules('menu_pelengkap', 'Menu Pelengkap', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_TambahPesanan');
      $this->load->view('templates/footer');
    } else {
      $date = $this->input->post('tgl_pesanan', true);
      $time = $this->input->post('waktu', true);
      $dateTime = strtotime($time . $date);
      $data_pesanan = [
        'nm_pemesan' => htmlspecialchars($this->input->post('nm_pemesan')),
        'alamat_pengiriman' => strtoupper(htmlspecialchars($this->input->post('alamat_pengiriman'))),
        'no_hp' => htmlspecialchars($this->input->post('no_hp')),
        'jml_porsi' => htmlspecialchars($this->input->post('jml_porsi')),
        'menu' => htmlspecialchars($this->input->post('menu')),
        'sayur' => htmlspecialchars($this->input->post('sayur')),
        'menu_pelengkap' => htmlspecialchars($this->input->post('menu_pelengkap')),
        'menu_tambahan' => htmlspecialchars($this->input->post('menu_tambahan')),
        'tgl_pesanan' => $dateTime,
      ];
      // var_dump($data_pesanan);
      // die;

      if ($this->db->insert('tb_pesanan', $data_pesanan)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Berhasil Menambah Pesanan ' . $data_pesanan['nm_pemesan'] . '</div>'
        );
        redirect('admin');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Gagal Menambah Pesanan</div>'
        );
        redirect('admin');
      }
    }
  }

  public function tambahResep()
  {
    $data['tittle'] = 'Tambah Resep';
    $data['subtittle'] = 'Tambah Resep';

    $data['bahan'] = $this->Bahan_model->getAllBahan();
    $data['menu'] = $this->Menu_model->getAllMenu();
    $data['loop'] = $this->input->get('jml_bahan');
    $data['id_menu'] = $this->input->get('id_menu');

    if ($data['loop'] != null) {
      for ($i = 0; $i < $data['loop']; $i++) {
        $this->form_validation->set_rules("id_bahan$i", 'Nama Bahan', 'required|trim',);
        $this->form_validation->set_rules("volume_bahan$i", 'Volume Bahan (g/ml)', 'required|trim',);
      }
    }
    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_TambahResep');
      $this->load->view('templates/footer');
    } else {
      for ($i = 0; $i < $data['loop']; $i++) {
        $data_resep[$i] = [
          'id_menu' => htmlspecialchars($data['id_menu']),
          'id_bahan' => htmlspecialchars($this->input->post("id_bahan$i")),
          'volume_bahan' => htmlspecialchars($this->input->post("volume_bahan$i")),
        ];
      }
      // var_dump($data_resep);
      // die;

      if ($this->db->insert_batch('tb_resep', $data_resep)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Berhasil Menambah Resep</div>'
        );
        redirect('admin/daftarResep');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                      Gagal Menambah Resep</div>'
        );
        redirect('admin/daftarResep');
      }
    }
  }



  public function tambahMenu()
  {
    $data['tittle'] = 'Tambah Menu';
    $data['subtittle'] = 'Tambah Menu';
    $this->form_validation->set_rules('nm_menu', 'Nama Menu', 'required|trim|is_unique[tb_menu.nm_menu]', [
      'is_unique' => 'Menu Sudah Terdaftar, Silahkan Isi Menu Lain'
    ]);
    $this->form_validation->set_rules('jml_porsi', 'Harga Per-KG/L', 'required|trim',);
    $this->form_validation->set_rules('markup', 'Persentase Keuntungan', 'required|trim|max_length[3]',);
    $this->form_validation->set_rules('jenis_sajian', 'Jenis Sajian', 'required|trim',);

    if ($this->form_validation->run() == false) {
      $this->load->view('templates/header', $data);
      $this->load->view('v_TambahMenu');
      $this->load->view('templates/footer');
    } else {
      $data_menu = [
        'nm_menu' => htmlspecialchars($this->input->post('nm_menu')),
        'jml_porsi' => htmlspecialchars($this->input->post('jml_porsi')),
        'markup' => htmlspecialchars($this->input->post('markup')),
        'jenis_sajian' => htmlspecialchars($this->input->post('jenis_sajian')),
      ];
      // var_dump($data_menu);
      // die;

      if ($this->db->insert('tb_menu', $data_menu)) {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-success alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Berhasil Menambah Bahan ' . $data_menu['nm_menu'] . '</div>'
        );
        redirect('admin/daftarMenu');
      } else {
        $this->session->set_flashdata(
          'message',
          '<div class="alert alert-danger alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        Gagal Menambah Bahan</div>'
        );
        redirect('admin/daftarMenu');
      }
    }
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

  public function ajax()
  {
    $ajax_menu = $this->input->post('ajax_menu', true);

    // ajax edit Bahan
    if ($ajax_menu == 'get_bahan') {
      $id = $this->input->post('id_bahan');
      $data['bahan'] = $this->Bahan_model->getBahanByType('id_bahan', $id);
      $this->load->view('ajax/ajax_EditBahan', $data);
    }

    // ajax edit menu
    if ($ajax_menu == 'get_menu') {
      $id = $this->input->post('id_menu');
      $data['menu'] = $this->Menu_model->getMenuByType('id_menu', $id);
      $this->load->view('ajax/ajax_EditMenu', $data);
    }

    // ajax edit resep
    if ($ajax_menu == 'get_resep') {
      $id = $this->input->post('id_resep');
      $data['bahan'] = $this->Bahan_model->getAllBahan();
      $data['resep'] = $this->Resep_model->getResepByType('id_resep', $id);
      $this->load->view('ajax/ajax_EditResep', $data);
    }

    // ajax edit pembukuan
    if ($ajax_menu == 'get_pembukuan') {
      $id = $this->input->post('id_pembukuan');
      $data['pembukuan'] = $this->Pembukuan_model->getPembukuanByType('id_pembukuan', $id);
      $this->load->view('ajax/ajax_EditPembukuan', $data);
    }

    // ajax edit pesanan
    if ($ajax_menu == 'get_pesanan') {
      $id = $this->input->post('id_pesanan');
      $data['menu_utama'] = $this->Menu_model->getMenuByType('jenis_sajian', 'MENU UTAMA');
      $data['sayur'] = $this->Menu_model->getMenuByType('jenis_sajian', 'SAYUR');
      $data['menu_tambahan'] = $this->Menu_model->getMenuByType('jenis_sajian', 'MENU TAMBAHAN');
      $data['menu_pelengkap'] = $this->Menu_model->getMenuByType('jenis_sajian', 'MENU PELENGKAP');
      $data['pesanan'] = $this->Pesanan_model->getPesananByType('id_pesanan', $id);
      $this->load->view('ajax/ajax_EditPesanan', $data);
    }
  }
}
