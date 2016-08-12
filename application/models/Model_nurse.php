<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Model_nurse extends CI_Model{


    /*TESTINGS*/
    function get_tasks($type_id)
    {
      $this->db->select('*');
      $this->db->from('task_usertype tu');
      $this->db->join('task t','tu.task_id=t.task_id','left');
      $this->db->where('user_type_id',$type_id);
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_permissions($type_id)
    {
      $where = "user_type_id ='$type_id' and access='1'";
      $this->db->select('*');
      $this->db->from('permission_usertype pu');
      $this->db->join('permission p','pu.permission_id=p.permission_id','left');
      $this->db->where($where);
      $query = $this->db->get();
      return $query->result_array();
    }




      public function fetchAllPatientByCategory(){

        //not complete yet need i join to
          $this -> db ->select('*');
          $this -> db ->from('patient');

          $query = $this->db->get();
          return $query->result_array();

      }

      public function searchPatientByLastName($keyword){
          //not complete yet need i join to
          $this -> db ->select('*');
          $this -> db ->from('patient');
          $this -> db ->like('first_name', $keyword);
          $query = $this->db->get();
          return $query->result_array();

      }

      public function fetchAllCSRItems(){

        $this -> db -> select('*');
        $this -> db -> from('csr_inventory');
        $query = $this->db->get();
        return $query->result_array();

      }


      public function CSRReqAddSingle($data){
        $sql =$this -> db -> insert('csr_request', $data);
          if($sql){
              return true;
          }else{
              return false;
          }
      }














}

?>
