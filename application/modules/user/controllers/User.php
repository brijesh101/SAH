<?php
 class User extends CI_Controller
 {

   function __construct()
   {
     parent::__construct();
     $this->load->model('user/user_model');
     $this->load->helper('url');
     $this->load->helper('user');
     $this->load->helper('form');
     $this->load->library('session');
     $this->load->library('form_validation');
   }

   function index(){

     $this->form_validation->set_rules('name','Name ','required');
     $this->form_validation->set_rules('email','Email','required');

     if ($this->form_validation->run()===FALSE) {

     }else{

    //  $filename=time() . date('Ymd');
    // $image='';
    // if(isset($_FILES['cat_image'])&&$_FILES['cat_image']['error']=='0'){
    //      $config = array(
    //      'upload_path' => "assets/backend/catImage/",
    //      'allowed_types' => "gif|jpg|png|jpeg",
    //      'overwrite' => TRUE,
    //      'max_size' => "2048000",
    //      'file_name' => $filename
    //      );
    //      $this->load->library('upload', $config);
    //      if($this->upload->do_upload('cat_image'))
    //      {
    //      $data = array('upload_data' => $this->upload->data());
    //      $image=$data['upload_data']['file_name'];
    //      }
    //      else
    //      {
    //      $error = array('error' => $this->upload->display_errors());
    //      echo $error['error'];die;
    //      }
    // }
   $last_id = $this->user_model->add_user();

   if ($last_id) {

                       $email=$this->input->post('email');

                       $this->email($last_id,$email);
     $this->session->set_flashdata('error','Registration Successfull ! Please check email and activate your account');
     redirect(base_url() .'user/user');
   }else {
     $this->session->set_flashdata('error','Registration Failed');
     redirect(base_url() .'user/user');
   }

     }

     $data['view']='user_registration';
     $this->load->view('frontend/home',$data);
   }

   function email($id,$emailto)
	{
      //echo "id recevie:".$id;die;
    $config = Array(
         'useragent' => 'CodeIgniter',
         'mailpath'  => '/usr/bin/sendmail',
				 'protocol' => 'smtp',
				 'smtp_host' => 'ssl://sg2plcpnl0049.prod.sin2.secureserver.net',
				 'smtp_port' => 465,
				 'smtp_user' => 'support@pratapsingh.co.in',
				 'smtp_pass' => 'pratapsingh@92',
				 'mailtype' => 'html',
				 'charset' => 'iso-8859-1',
         'newline' => '\r\n',
				 'wordwrap' => TRUE
                       );

 //load email library

 $this->load->library('email');
 $this->email->initialize($config);
 //$this->email->set_newline("\r\n");

 $url= base_url().'user/user/activation/'.$id;

 $subject="activate your account";
 $message='Please click to link and activate your acount '.'<a href='.$url.'>click</a>';
  //echo $message;die;
 $this->email->from('support@pratapsingh.co.in', 'S@H');
  $this->email->to($emailto);

  $this->email->subject($subject);
  $this->email->message($message);

  if($this->email->send())
{
  return ;
}
else
{
  $this->session->set_flashdata('error','Invalid email account!!!!');
   redirect(base_url() .'user/user');
  //show_error($this->email->print_debugger());
}



	}

  public function activation($id=NULL)
  {

      $this->user_model->activationAcount($id);

      $this->session->set_flashdata('error','Account is activated');
      redirect(base_url() .'user/user');

  }

  public function userLogin(){



       $this->form_validation->set_rules('email','Email','required');
       $this->form_validation->set_rules('password','Password','required');

       if ($this->form_validation->run()===FALSE) {

       }else{
         //echo "mnvb";die;
         $records = $this->user_model->get_user_email($this->input->post('email'));

            if(!empty($records)){
              if ($records->user_status ==1) {
                if($records->user_password == sha1($this->input->post('password'))){
                  start_session($records->user_id,$records->user_email_id,TRUE);
                  //redirect(base_url());
                  echo 1;
                  }else{

                        echo 'Invalid email id and password!';
                      }

              }else{
                echo 'Your account is not activated!! Please check email ?';
              }

               }else{
              echo 'Your Email Not Register';
               }



       }

       //$this->load->view('adminauth/adminLogin');

  }

  public function userlogout()
  {
    $user_id= $this->session->userdata('user_id');
    remove_session();
  redirect(base_url());
  }

 }

 ?>
