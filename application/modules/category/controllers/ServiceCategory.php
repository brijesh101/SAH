<?php

    /**
     *
     */
    class ServiceCategory extends CI_Controller
    {

      function __construct()
      {
        parent::__construct();
          $this->load->model('category/category_model');
        $this->load->helper('adminauth/login');
        $this->load->helper('url');
        $this->load->helper('form');
        if(is_user_login(TRUE) === FALSE){
           redirect('adminauth/login_admin');
                         die();
                       }
      }
      public function index(){

      }

      public function addCategory(){
        $this->form_validation->set_rules('cat_parent_id','Parent ','required');
        $this->form_validation->set_rules('cat_name','Category Name','required');

        if ($this->form_validation->run()===FALSE) {

        }else{

        $filename=time() . date('Ymd');
			 $image='';
			 if(isset($_FILES['cat_image'])&&$_FILES['cat_image']['error']=='0'){
						$config = array(
						'upload_path' => "assets/backend/catImage/",
						'allowed_types' => "gif|jpg|png|jpeg",
						'overwrite' => TRUE,
						'max_size' => "2048000",
						'file_name' => $filename
						);
						$this->load->library('upload', $config);
						if($this->upload->do_upload('cat_image'))
						{
						$data = array('upload_data' => $this->upload->data());
						$image=$data['upload_data']['file_name'];
						}
						else
						{
						$error = array('error' => $this->upload->display_errors());
						echo $error['error'];die;
						}
			 }
			$row = $this->category_model->add_category($image);
      if ($row) {
        $this->session->set_flashdata('error','category added');
        redirect(base_url() .'category/servicecategory/addCategory');
      }else {
        $this->session->set_flashdata('error','Failed');
        redirect(base_url() .'category/servicecategory/addCategory');
      }

        }

         $data['view']='addCategory';
         $this->load->view('backend/layout',$data);

      }


      public function listCategory(){

        $data['category'] = $this->category_model->list_category();
        $data['view']='listCategory';
        $this->load->view('backend/layout',$data);
      }

      public function status()
      {
        $id = $this->input->get('id', TRUE);
        $status = $this->input->get('status',TRUE);

           if($status == 1)
             {
               $status = 0;
			        $data =  $this->category_model->update_status($id,$status);
                echo $data;
		         }
		       else{
                $status = 1;
			            $data =   $this->category_model->update_status($id,$status);
                echo $data;
		          }
      }

      public function viewCategory($id = NULL)
      {

        if($id == NULL){

			show_404();
		}

		$data['page'] = $this->category_model->list_category($id);
		if(empty($data['page'])){
			show_404();
		}

		    $data['view']='viewCategory';
        $this->load->view('backend/layout', $data);
      }

      public function editCategory($id= NULL)
      {
        $this->form_validation->set_rules('cat_parent_id','Parent ','required');
        $this->form_validation->set_rules('cat_name','Category Name','required');
        if($id == NULL){
                       show_404();
                     }
            $data['page'] = $this->category_model->list_category($id);
        if ($this->form_validation->run()===FALSE) {

        }else{

        $filename=time() . date('Ymd');
			 $image='';
			 if(isset($_FILES['cat_image'])&&$_FILES['cat_image']['error']=='0'){
						$config = array(
						'upload_path' => "assets/backend/catImage/",
						'allowed_types' => "gif|jpg|png|jpeg",
						'overwrite' => TRUE,
						'max_size' => "2048000",
						'file_name' => $filename
						);
						$this->load->library('upload', $config);
						if($this->upload->do_upload('cat_image'))
						{
						$data = array('upload_data' => $this->upload->data());
						$image=$data['upload_data']['file_name'];
						}
						else
						{
						$error = array('error' => $this->upload->display_errors());
						echo $error['error'];die;
						}
			 }
			$row = $this->category_model->add_category($image,$id);
      if ($row) {
        $this->session->set_flashdata('error','category updated');
        redirect(base_url() .'category/servicecategory/editCategory/'.$id);
      }else {
        $this->session->set_flashdata('error','Failed');
        redirect(base_url() .'category/servicecategory/editCategory/'.$id);
      }

        }

         $data['view']='editCategory';
         $this->load->view('backend/layout',$data);
      }

      public function remove($id = NULL){
		if($id== NULL || !is_numeric($id)){
			show_404();
		}

		$this->load->library('user_agent');
		$url =  $this->agent->referrer();
		$this->category_model->remove_category($id);
		// return to referrer url if not from other site.
		if (!$this->agent->is_referral() && !empty($url)){
			redirect($url);
		}else{
			redirect(base_url() .'category/servicecategory/listCategory');
		}
	}

}

 ?>
