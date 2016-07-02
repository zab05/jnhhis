<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Model_Radiology extends CI_Model{

    function get_radiology_exams(){
      $this->db->select('*');
      $this->db->from('radiology_exam');
      $this->db->where('exam_status', 1);
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_inactive_radiology_exams(){
      $this->db->select('*');
      $this->db->from('radiology_exam');
      $this->db->where('exam_status', 0);
      $query = $this->db->get();
      return $query->result_array();
    }

    function insert_radiology_exam($data){
      $this->db->insert('radiology_exam', $data);
    }

    function deactivate($id, $data){
      $this->db->where('exam_id', $id);
      $this->db->update('radiology_exam', $data);
    }

    function activate($id, $data){
      $this->db->where('exam_id', $id);
      $this->db->update('radiology_exam', $data);
    }

  }
?>
