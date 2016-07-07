<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Radiology extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('Model_Radiology');
      if($this->session->userdata("user_loggedin")==TRUE){
        if($this->session->userdata("type_id") == 1){
          redirect(base_url()."Admin", "refresh");
        }
      }else{
        redirect(base_url());
      }
    }

    function index(){
      $this->load->view('radiology/includes/header.php');
      $this->load->view('radiology/index.php');
      $this->load->view('radiology/includes/footer.php');
    }

    function Maintenance(){
      $data['radiology_exams'] = $this->Model_Radiology->get_radiology_exams();
      $this->load->view('radiology/includes/header.php');
      $this->load->view('radiology/maintenance.php', $data);
      $this->load->view('radiology/includes/footer.php');
    }

    function InactiveExams(){
      $data['radiology_exams'] = $this->Model_Radiology->get_inactive_radiology_exams();
      $this->load->view('radiology/includes/header.php');
      $this->load->view('radiology/inactive_exams.php', $data);
      $this->load->view('radiology/includes/footer.php');
    }

    function MakeRadiologyRequest(){
      $data['radiology_exams'] = $this->Model_Radiology->get_radiology_exams();
      $data['patients'] = $this->Model_Radiology->get_patient_list();
      $this->load->view('radiology/includes/header.php');
      $this->load->view('radiology/makeradiologyrequst.php', $data);
      $this->load->view('radiology/includes/footer.php');
    }

    function DeactivateExam($id){
      $data = array('exam_status'=>0);
      $this->Model_Radiology->deactivate($id, $data);
      redirect(base_url()."Radiology/Maintenance", "refresh");
    }

    function ActivateExam($id){
      $data = array('exam_status'=>1);
      $this->Model_Radiology->activate($id, $data);
      redirect(base_url()."Radiology/InactiveExams", "refresh");
    }


    function insert_radiology_exam(){
      $this->form_validation->set_rules('name', 'Exam Name', 'required|trim');
      $this->form_validation->set_rules('description', 'Exam Description', 'required|trim');
      $this->form_validation->set_rules('price', 'Exam Price', 'required|trim');
      if($this->form_validation->run() == FALSE){
        echo validation_errors();
      }else{
        $data = array(
                      'exam_name'=>$this->input->post('name'),
                      'exam_description'=>$this->input->post('description'),
                      'exam_price'=>$this->input->post('price'),
                      'exam_status'=>1
                     );
        $this->Model_Radiology->insert_radiology_exam($data);
        redirect(base_url()."Radiology/Maintenance", "refresh");
      }
    }

    function insert_request(){
      print_r($this->input->post('exams[]'));
    }

    function logout(){
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }
?>
