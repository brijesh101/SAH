<?php
	function start_session($admin_id,$admin_email,$admin = FALSE){
		$hash = sha1($admin_id.ADMIN_KEY);
		if($admin !== FALSE){
			$hash = sha1($admin_id.USER_KEY);
		}
		$session = array(
			'session_id' => $hash,
			'admin_id' => $admin_id,
			'admin_email' => $admin_email,
			'admin_loged' => true
		);
		$ci =& get_instance();
		$ci->session->set_userdata($session);
	}

	function is_user_login($admin = FALSE){
		$ci =& get_instance();
		$session = $ci->session->all_userdata();
		if(empty($session)){
			return FALSE;
		}
		if(!isset($session['admin_id'])){
			return FALSE;
		}
		$hash = sha1($session['admin_id'].USER_KEY);
		if($admin === FALSE){
			$hash = sha1($session['admin_id'].ADMIN_KEY);
		}

		if($hash == $session['session_id']){
			return TRUE;
		}
		return FALSE;
	}

	function remove_session(){

		$ci =& get_instance();

		$ci->session->sess_destroy();
	}

	function get_loged_user_email(){
		$ci =& get_instance();
		$session = $ci->session->all_userdata();
		if(!isset($session['admin_email'])){
			return FALSE;
		}
		return $session['admin_email'];
	}
	function get_loged_user_id(){
		$ci =& get_instance();
		$session = $ci->session->all_userdata();
		if(!isset($session['admin_id'])){
			return FALSE;
		}

		return $session['admin_id'];
	}
?>
