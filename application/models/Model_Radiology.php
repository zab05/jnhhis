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

    function get_patient_list(){
      $this->db->select('*');
      $this->db->from('patient');
      $query = $this->db->get();
      return $query->result_array();
    }

    function insert_request($data){
      $this->db->insert('radiology_request', $data);
      $this->db->select('*');
      $this->db->from('radiology_request');
      $this->db->order_by("request_id", "desc");
      $this->db->limit(1);
      $query = $this->db->get();
      return $query->row();
    }

    function insert_radiology_pat($data){
      $this->db->insert('radiology_pat', $data);
    }

    function get_radiology_requests(){
      $this->db->select('*');
      $this->db->select('c.first_name as P_first_name, c.middle_name as P_middle_name, c.last_name as P_last_name');
      $this->db->from('radiology_pat a');
      $this->db->join('radiology_request b', 'a.rad_reqid=b.request_id', 'left');
      $this->db->join('patient c', 'c.patient_id=a.pat_id', 'left');
      $this->db->join('users d', 'b.user_id_fk=d.user_id', 'left');
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_pending_requests(){
      $this->db->select('*');
      $this->db->select('c.first_name as P_first_name, c.middle_name as P_middle_name, c.last_name as P_last_name');
      $this->db->from('radiology_pat a');
      $this->db->join('radiology_request b', 'a.rad_reqid=b.request_id', 'left');
      $this->db->join('patient c', 'c.patient_id=a.pat_id', 'left');
      $this->db->join('users d', 'b.user_id_fk=d.user_id', 'left');
      $this->db->where('a.request_status', 0);
      $query = $this->db->get();
      return $query->result_array();
    }

    function approve_request($id, $data){
      $this->db->where('trans_id', $id);
      $this->db->update('radiology_pat', $data);
    }

    function count_all_radiology_request(){
      $this->db->select('*');
      $this->db->from('radiology_pat');
      $query = $this->db->get();
      return $query->num_rows();
    }

    function count_pending_radiology_request(){
      $this->db->select('*');
      $this->db->from('radiology_pat');
      $this->db->where('request_status', 0);
      $query = $this->db->get();
      return $query->num_rows();
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
