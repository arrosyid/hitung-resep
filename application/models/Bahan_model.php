<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Bahan_model extends CI_Model
{
  public function getAllBahan()
  {
    return $this->db->get('tb_bahan')->result_array();
  }
  public function getBahanByType($type, $id)
  {
    if ($type == 'id_bahan') {
      return $this->db->get_where('tb_bahan', ['id_bahan' => $id])->row_array();
    }
    if ($type == 'nm_bahan') {
      return $this->db->get_where('tb_bahan', ['nm_bahan' => $id])->result_array();
    }
  }
  public function updateBahanById($id, $data)
  {
    return $this->db->update('tb_bahan', $data, ['id_bahan' => $id]);
  }
  public function deleteBahanById($id)
  {
    $this->db->trans_start();
    $this->db->delete('tb_resep', ['id_bahan' => $id]);
    $this->db->delete('tb_bahan', ['id_bahan' => $id]);
    $this->db->trans_commit();
    return $this->db->trans_status();
  }
}
