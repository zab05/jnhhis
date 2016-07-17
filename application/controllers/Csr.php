<?php
  if (!defined('BASEPATH'))exit('No direct script access allowed');
  class Csr extends CI_Controller{

    function __construct(){
      parent::__construct();
      $this->load->model('Model_Csr');
      if($this->session->userdata("user_loggedin")==TRUE){
        if($this->session->userdata("type_id") == 1){
          redirect(base_url()."Admin", "refresh");
        }
        elseif($this->session->userdata("type_id") == 6){
          redirect(base_url()."Radiology", "refresh");
        }
      }else{
        redirect(base_url());
      }
    }

function index()
{
  $this->load->view("csr/includes/header.php");
  $this->load->view("csr/index.php");
  $this->load->view("csr/includes/footer.php");
}

function PendingRequests()
{
    $data['nursetocsr'] = $this->Model_Csr->get_nurse_requests();
    $this->load->view("csr/includes/header.php");
    $this->load->view('csr/pendingrequest.php',$data);
    $this->load->view("csr/includes/footer.php");
}

function ListofProducts()
{
    $data['csrinventory'] = $this->Model_Csr->get_csr_inventory();
    $this->load->view("csr/includes/header.php");
    $this->load->view('csr/listofproducts.php',$data);
    $this->load->view("csr/includes/footer.php");
}

function RequestRestock($id)
{
  $data['restock'] = $this->Model_Csr->restockdata($id);
  $this->load->view('csr/includes/header.php');
  $this->load->view('csr/restock.php',$data);
  $this->load->view('csr/includes/footer.php');
}

function RequestHistory()
{
  $data['accepted'] = $this->Model_Csr->get_accepted_request();
  $data['rejected'] = $this->Model_Csr->get_rejected_request();
  $data['hold']     = $this->Model_Csr->get_hold_request();
  $this->load->view('csr/includes/header.php');
  $this->load->view('csr/requesthistory.php',$data);
  $this->load->view('csr/includes/footer.php');
}

function add_newproduct(){
  $this->form_validation->set_rules('itemreq', 'Item Name', 'required|trim|xss_clean|strip_tags');
  $this->form_validation->set_rules('itemquant', 'Item Name', 'required|trim|xss_clean|strip_tags');

  if($this->form_validation->run()==FALSE){
    echo "Something is wrong";
  } else {
    $new = $this->Model_Csr->reqtypenewproduct();
    $data = array('requester_id'=>$_SESSION['user_id'],
                  'item_id'=>NULL,
                  'quantity'=>$this->input->post('itemquant'),
                  'request_type'=>$new,
                  'item_name'=>$this->input->post('itemreq'));
   $this->Model_Csr->requestproduct($data);
   redirect("Csr/ListofProducts");
  }
}

function request_restock($id)
{
  $itemname = $this->input->post('productname');
  $itemquant = $this->input->post('productquant');

  $restock = $this->Model_Csr->reqtyperestock();
  $data = array('requester_id'=>$_SESSION['user_id'],
                'item_id'=>$id,
                'quantity'=>$itemquant,
                'request_type'=>$restock,
                'item_name'=>$itemname);
  $this->Model_Csr->restockproduct($data);
  redirect("Csr/ListofProducts");
}


    function logout(){
      $this->session->sess_destroy();
      redirect(base_url());
    }
  }
?>
