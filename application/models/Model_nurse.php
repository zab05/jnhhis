<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Model_nurse extends CI_Model{





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
