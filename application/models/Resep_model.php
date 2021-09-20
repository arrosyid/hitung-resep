<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Resep_model extends CI_Model
{
  public function getAllResep()
  {
    $this->db->select('tb_resep.*, tb_menu.*, tb_bahan.*')
      ->from('tb_resep')
      ->join('tb_menu', 'tb_resep.id_menu = tb_menu.id_menu')
      ->join('tb_bahan', 'tb_resep.id_bahan = tb_bahan.id_bahan');
    return $this->db->get()->result_array();
  }
  public function getResepByType($type, $id)
  {
    if ($type == 'id_resep') {
      $this->db->select('tb_resep.*, tb_menu.*, tb_bahan.*')
        ->from('tb_resep')
        ->where(['id_resep' => $id])
        ->join('tb_menu', 'tb_resep.id_menu = tb_menu.id_menu')
        ->join('tb_bahan', 'tb_resep.id_bahan = tb_bahan.id_bahan');
      return $this->db->get()->row_array();
    }
    if ($type == 'id_menu') {
      $this->db->select('tb_resep.*, tb_menu.*, tb_bahan.*')
        ->from('tb_resep')
        ->where(['id_menu' => $id])
        ->join('tb_menu', 'tb_resep.id_menu = tb_menu.id_menu')
        ->join('tb_bahan', 'tb_resep.id_bahan = tb_bahan.id_bahan');
      return $this->db->get()->result_array();
    }
    if ($type == 'id_bahan') {
      $this->db->select('tb_resep.*, tb_menu.*, tb_bahan.*')
        ->from('tb_resep')
        ->where(['id_bahan' => $id])
        ->join('tb_menu', 'tb_resep.id_menu = tb_menu.id_menu')
        ->join('tb_bahan', 'tb_resep.id_bahan = tb_bahan.id_bahan');
      return $this->db->get()->result_array();
    }
  }
  public function updateResepByType($type, $data, $id = null)
  {
    if ($type == 'id_resep') {
      return $this->db->update('tb_resep', $data, ['id_resep' => $id]);
    }
    if ($type == 'id_menu') {
      return $this->db->update_batch('tb_resep', $data, 'id_menu');
    }
    if ($type == 'id_bahan') {
      return $this->db->update_batch('tb_resep', $data, 'id_bahan');
    }
  }
  public function deleteResepById($id)
  {
    return $this->db->delete('tb_resep', ['id_resep' => $id]);
  }
}
