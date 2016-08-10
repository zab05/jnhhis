<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Management extends CI_Controller{

    function __construct(){
        parent::__construct();

       $this->load->model('Model_management');



    }

    public function index(){
      $data['title'] = "HIS: Management";
      $this->load->view('management/includes/header.php');
      // echo "<pre>";
      // print_r($this->session->all_userdata());
      // echo "</pre>";
      // $this -> load -> view('management/index', $data);
      $this->load->view('management/includes/footer.php');
    }

    public function viewallmembers(){
      $data['title'] = "HIS: Management";
      $this->load->view('management/includes/header.php');
      $this -> load -> view('management/index', $data);
      $this->load->view('management/includes/footer.php');

    }

    public function showrequests(){
      $data['title'] = "HIS: Management";
      $data['patients'] = [];
      $this->load->view('management/includes/header.php');
      $this->load->view('management/request', $data);
      $this->load->view('management/includes/footer.php');
    }






}


?>
