<?php
  /**
   *
   */
  class Home extends CI_Controller
  {

    function __construct()
    {
     parent::__construct();
    }
    public function index(){
      $data['title']='SAH | Service @t Home';
      $data['view']='main';
      $this->load->view('frontend/home',$data);

    }
  }

 ?>
