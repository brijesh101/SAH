<?php
     /**
      *
      */
     class Admin_Dash extends CI_Controller
     {

       function __construct()
       {
         parent::__construct();
         $this->load->helper('adminauth/login');
         $this->load->helper('url');
         $this->load->helper('form');
         if(is_user_login(TRUE) === FALSE){
			      redirect('adminauth/login_admin');
                    			die();
                    		}

       }

       function index(){
         $data['view'] = 'maincontent';
         $this->load->view('backend/layout',$data);
       }
     }

 ?>
