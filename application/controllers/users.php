<?php

class Users extends CI_Controller{

  public function login(){
    $this->load->library('form_validation');
		$this->form_validation->set_rules('nic','NIC','required');


    if($this->form_validation->run() == FALSE){ //if validation are false page will redirect to login page with the validation errors.
      $this->load->view('template/header'); // HEADER of the page.
      $this->load->view('users/login_view');       // MAIN CONTENTS in the page.
      $this->load->view('template/footer'); // FOOTER of the page.
    }else {
      echo "logged in";
    }

  }

  public function register(){
    echo 'Register';

  }
}


 ?>
