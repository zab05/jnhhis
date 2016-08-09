<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Management extends CI_Controller{

    function __construct(){
        parent::__construct();

      //  $this->load->model('Model_nurse');



    }

    public function index(){
      $data['title'] = "Management";
      $this->load->view('management/includes/header.php');
      // echo "<pre>";
      // print_r($this->session->all_userdata());
      // echo "</pre>";
      $this->load->view('management/includes/footer.php');
    }



}


?>
