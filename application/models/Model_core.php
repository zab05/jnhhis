<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');

  class Model_core extends CI_Model{
  	function __construct(){
  		parent::__construct();
  	}

  	function checkLogin($user_username,$user_password){
  		$where = array(
  				"username"=>$user_username,
  				"password"=>$user_password,
  				"status"=>1
  			);
  		$this->db->select("*")->from("users")->where($where);
  		$data = $this->db->get();
  		return $data->result();
  	}
  }
 ?>
