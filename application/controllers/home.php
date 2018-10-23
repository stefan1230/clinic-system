<?php

class Home extends CI_Controller{

  public function index(){
    $this->load->view('template/header'); // HEADER of the page.
    $this->load->view('home_view');       // MAIN CONTENTS in the page.
    $this->load->view('template/footer'); // FOOTER of the page.
  }
}


 ?>
