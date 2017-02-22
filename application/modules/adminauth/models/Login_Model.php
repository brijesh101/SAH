<?php

    /**
     *
     */
    class Login_Model extends CI_Model
    {

      function __construct()
      {
        parent::__construct();
      }

      public function get_admin_email($email){

    		$query = $this->db->get_where('admin_login',array('admin_email' => $email));
    		return $query->first_row();
	     }


    }

 ?>
