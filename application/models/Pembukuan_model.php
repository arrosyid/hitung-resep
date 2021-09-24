<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembukuan_model extends CI_Model
{
  public function getAllPembukuan()
  {
    $this->db->select('tb_pembukuan.*, tb_pesanan.*')
      ->from('tb_pembukuan')
      ->join('tb_pesanan', 'tb_pembukuan.id_pesanan = tb_pesanan.id_pesanan');
    return $this->db->get()->result_array();
  }
  public function getPembukuanByType($type, $id)
  {
    if ($type == 'id_pembukuan') {
      $this->db->select('tb_pembukuan.*, tb_pesanan.*')
        ->from('tb_pembukuan')
        ->where(['tb_pembukuan.id_pembukuan' => $id])
        ->join('tb_pesanan', 'tb_pembukuan.id_pesanan = tb_pesanan.id_pesanan');
      return $this->db->get()->row_array();
    }
    if ($type == 'id_pesanan') {
      $this->db->select('tb_pembukuan.*, tb_pesanan.*')
        ->from('tb_pembukuan')
        ->where(['tb_pembukuan.id_pesanan' => $id])
        ->join('tb_pesanan', 'tb_pembukuan.id_pesanan = tb_pesanan.id_pesanan');
      return $this->db->get()->result_array();
    }
  }
  public function updatePembukuanById($id, $data)
  {
    return $this->db->update('tb_pembukuan', $data, ['id_pembukuan' => $id]);
  }
  public function deletePembukuanById($id)
  {
    return $this->db->delete('tb_pembukuan', ['id_pembukuan' => $id]);
  }
}
