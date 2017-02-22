<?php

    /**
     *
     */
    class User_model extends CI_Model
    {

      function __construct()
      {
        parent::__construct();
      }

      public function add_user($id=NULL) {
  		//print_r($id);die;
  		//echo $image; die;
  			$data = array(
  				'user_name' => $this->input->post('name'),
  				'user_email_id' => $this->input->post('email'),
          'user_mobile' => $this->input->post('mobile'),
          'user_password' => sha1($this->input->post('password')),
          'user_city' => $this->input->post('city'),
          'user_state' => $this->input->post('state'),
          'user_address' => $this->input->post('message')

  		);
  		  // if($image !=''){
  			//   	$data['cat_image']=$image;
        //         }
  		if($id == NULL){
  			// need to create entery
  			$data['user_created_date'] = date("Y-m-d:H:i:s");
  		  $this->db->insert('user', $data);
        $insert_id = $this->db->insert_id();

		    return $insert_id;
  		}
  		// need to update entery
  		$data['user_updated_date'] = date("Y-m-d:H:i:s");
  		$this->db->where('user_id',$id);
  		return $this->db->update('user', $data);
  	}

    function activationAcount($id)
	{

         $data=array(

                 'user_status'=> '1'
         	);

         $this->db->where('user_id',$id);
		return $this->db->update('user', $data);

	}

  public function get_user_email($email){

    $query = $this->db->get_where('user',array('user_email_id' => $email));
    return $query->first_row();
   }


    }

 ?>
