<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Laboratory extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('Model_Laboratory');
      if($this->session->userdata("user_loggedin")==TRUE){
        if($this->session->userdata("type_id") == 1){
          redirect(base_url()."Admin", "refresh");
        }
      }else{
        redirect(base_url());
      }
    }

    function index(){
      $header['tasks'] = $this->Model_Laboratory->get_tasks($this->session->userdata('type_id'));
      $header['permissions'] = $this->Model_Laboratory->get_permissions($this->session->userdata('type_id'));
      $this->load->view('laboratory/includes/header.php',$header);
      $this->load->view('laboratory/index.php');
      $this->load->view('laboratory/includes/footer.php');
    }


    function logout(){
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }
?>
