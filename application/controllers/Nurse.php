<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Nurse extends CI_Controller{


    function __construct(){
        parent::__construct();

        $this->load->model('Model_nurse');
        // if($this->session->userdata("user_loggedin")==TRUE){
        //   if($this->session->userdata("type_id") == 3){
        //     redirect(base_url()."Nurse", "refresh");
        //   }
        // }else{
        //   redirect(base_url());
        // }


    }

    public function index(){
      $data['title'] = "HIS: Nurse dashboard";
      $this->load->view('nurse/includes/header.php');
      $this->load->view('nurse/index.php', $data);
      $this->load->view('nurse/includes/footer.php');
    }


    public function vitalsigns(){

      $data['title'] = "HIS: Patient Vital signs";
      if(empty($this->input->post('keyword'))){
          $data['patients'] = $this -> Model_nurse -> fetchAllPatientByCategory();
      }else{
        $data['patients'] = $this -> Model_nurse -> searchPatientByLastName($this->input->post('keyword'));
      }



      $this->load->view('nurse/includes/header.php');
      $this->load->view('nurse/viewvitalsigns.php', $data);
      $this->load->view('nurse/includes/footer.php');
    }

    public function vitalshistory(){
      $data['title'] = "HIS: Patient Vital signs";
      $this->load->view('nurse/includes/header.php');
      $this->load->view('nurse/vitalshistory.php', $data);
      $this->load->view('nurse/includes/footer.php');

    }






}


?>
