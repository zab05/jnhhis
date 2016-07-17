<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Model_Csr extends CI_Model{

    function get_csr_inventory()
    {
      $this->db->select('*');
      $this->db->from('csr_inventory');
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_stockname($id)
    {
      $this->db->select('*');
      $this->db->from('csr_inventory');
      $this->db->where('csr_id',$id);
      $query = $this->db->get();
      return $query->row('item_name');
    }

    function reqtypenewproduct()
    {
    $this->db->select('*');
    $this->db->from('purchase_req_type');
    $this->db->where('pur_name','New Product');
    $query = $this->db->get();
    return $query->row('pur_req_id');
    }

    function reqtyperestock()
    {
    $this->db->select('*');
    $this->db->from('purchase_req_type');
    $this->db->where('pur_name','Restock');
    $query = $this->db->get();
    return $query->row('pur_req_id');
    }

    function requestproduct($data)
    {
      $this->db->insert('purchasing_csr',$data);
    }

    function restockproduct($data)
    {
      $this->db->insert('purchasing_csr',$data);
    }

    function restockdata($id)
    {
      $this->db->select('*');
      $this->db->from('csr_inventory');
      $this->db->where('csr_id',$id);
      $query = $this->db->get();
      return $query->row();
    }

    function get_nurse_requests()
    {
      $this->db->select('*');
      $this->db->from('csr_request');
      $this->db->where('csr_status',0);
      $this->db->where('csr_status',2);
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_accepted_request()
    {
      $this->db->select('*');
      $this->db->from('purchasing_csr a');
      $this->db->join('users u','a.requester_id=u.user_id','left');
      $this->db->join('purchase_req_type p', 'a.request_type=p.pur_req_id', 'left');
      $this->db->where('pur_stat',1);
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_rejected_request()
    {
      $this->db->select('*');
      $this->db->from('purchasing_csr a');
      $this->db->join('users u','a.requester_id=u.user_id','left');
      $this->db->join('purchase_req_type p', 'a.request_type=p.pur_req_id', 'left');
      $this->db->where('pur_stat',2);
      $query = $this->db->get();
      return $query->result_array();
    }

    function get_hold_request()
    {
      $this->db->select('*');
      $this->db->from('purchasing_csr a');
      $this->db->join('users u','a.requester_id=u.user_id','left');
      $this->db->join('purchase_req_type p', 'a.request_type=p.pur_req_id', 'left');
      $this->db->where('pur_stat',3);
      $query = $this->db->get();
      return $query->result_array();
    }

  }
?>
