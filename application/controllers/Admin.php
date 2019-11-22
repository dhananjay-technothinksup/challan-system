<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller{

  public function login(){
    $this->load->view('Admin/login');
  }

  public function dashboard(){
    $this->load->view('Admin/dashboard');
  }

  public function company_information_list(){
    $this->load->view('Admin/company_information_list');
  }

  public function company_information(){
    $this->load->view('Admin/company_information');
  }

  public function item_information_list(){
    $this->load->view('Admin/item_information_list');
  }

  public function item_information(){
    $this->load->view('Admin/item_information');
  }

  public function item_group_information(){
    $this->load->view('Admin/item_group_information');
  }

  public function item_group_information_list(){
    $this->load->view('Admin/item_group_information_list');
  }

  public function party_information(){
    $this->load->view('Admin/party_information');
  }

  public function party_information_list(){
    $this->load->view('Admin/party_information_list');
  }

  public function vehicle_information(){
    $this->load->view('Admin/vehicle_information');
  }

  public function vehicle_information_list(){
    $this->load->view('Admin/vehicle_information_list');
  }

  public function remark_information(){
    $this->load->view('Admin/remark_information');
  }

  public function remark_information_list(){
    $this->load->view('Admin/remark_information_list');
  }

  public function process_information(){
    $this->load->view('Admin/process_information');
  }

  public function process_information_list(){
    $this->load->view('Admin/process_information_list');
  }

  public function inword_information(){
    $this->load->view('Admin/inword_information');
  }

  public function inword_information_list(){
    $this->load->view('Admin/inword_information_list');
  }

  public function outword_information(){
    $this->load->view('Admin/outword_information');
  }

  public function outword_information_list(){
    $this->load->view('Admin/outword_information_list');
  }

  public function user_information(){
    $this->load->view('Admin/user_information');
  }

  public function user_information_list(){
    $this->load->view('Admin/user_information_list');
  }

  public function unit_information(){
    $this->load->view('Admin/unit_information');
  }

  public function unit_information_list(){
    $this->load->view('Admin/unit_information_list');
  }

  public function item_wise_stock_report(){
    $this->load->view('Admin/item_wise_stock_report');
  }
  public function vehicle_report(){
    $this->load->view('Admin/vehicle_report');
  }


}
?>
