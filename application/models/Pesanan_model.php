<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_model extends CI_Model
{
  public function getAllPesanan()
  {
    return $this->db->get('tb_pesanan')->result_array();
  }
  public function getPesananByType($type, $id)
  {
    if ($type == 'id_pesanan') {
      return $this->db->get_where('tb_pesanan', ['id_pesanan' => $id])->row_array();
    }
    if ($type == 'nm_pemesan') {
      return $this->db->get_where('tb_pesanan', ['nm_pemesan' => $id])->result_array();
    }
  }
  public function updatePesananById($id, $data)
  {
    return $this->db->update('tb_pesanan', $data, ['id_pesanan' => $id]);
  }
  public function deletePesananById($id)
  {
    $this->db->trans_start();
    $this->db->delete('tb_pembukuan', ['id_pesanan' => $id]);
    $this->db->delete('tb_pesanan', ['id_pesanan' => $id]);
    $this->db->trans_commit();
    return $this->db->trans_status();
  }
}
