<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
  public function getAllMenu()
  {
    return $this->db->get('tb_menu')->result_array();
  }
  public function getMenuByType($type, $id)
  {
    if ($type == 'id_menu') {
      return $this->db->get_where('tb_menu', ['id_menu' => $id])->row_array();
    }
    if ($type == 'jenis_sajian') {
      return $this->db->get_where('tb_menu', ['jenis_sajian' => $id])->result_array();
    }
  }
  public function updateMenuById($id, $data)
  {
    return $this->db->update('tb_menu', $data, ['id_menu' => $id]);
  }
  public function deleteMenuById($id)
  {
    $this->db->trans_start();
    $this->db->delete('tb_resep', ['id_menu' => $id]);
    $this->db->delete('tb_menu', ['id_menu' => $id]);
    $this->db->trans_commit();
    return $this->db->trans_status();
  }
}
