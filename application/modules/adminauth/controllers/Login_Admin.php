<?php
  //error_reporting(0);
  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
  class Login_Admin extends CI_Controller
  {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('adminauth/login_model');
      $this->load->helper('login');
      $this->load->helper('url');
      $this->load->helper('form');
    }

    public function index(){

         $this->form_validation->set_rules('email','Email','required');
         $this->form_validation->set_rules('password','Password','required');

         if ($this->form_validation->run()===FALSE) {

         }else{
           $records = $this->login_model->get_admin_email($this->input->post('email'));
              if(!empty($records)){
                if($records->admin_password == sha1($this->input->post('password'))){
                  start_session($records->admin_id,$records->admin_email,TRUE);
                  redirect(base_url().'admindash/admin_dash');
                  //echo "welcome";
                  }else{
                        $this->session->set_flashdata('error','Invalid email id and password!');
                      }
                 }else{
                  $this->session->set_flashdata('error','Your Email Not Register');
                 }



         }

         $this->load->view('adminauth/adminLogin');

    }

    public function logout()
    {
      $user_id= $this->session->userdata('admin_id');
		$data = array(
			'admin_login_date' => date('Y-m-d H:i:s'),
		  );
		$this->db->where('admin_id',$user_id);
		$this->db->update('admin_login', $data);
	    remove_session();
		redirect(base_url().'adminauth/login_admin');
    }

  }


 ?>
