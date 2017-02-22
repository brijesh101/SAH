<?php

  /**
   *
   */
  class Category_Model extends CI_Model
  {

    function __construct()
    {
      parent::__construct();
    }
    public function list_category($id = NULL)
    {    if($id == NULL){
          return $this->db->get('service_category')->result();
        }
        $query = $this->db->get_where('service_category',array('cat_id' => $id));
		   return $query->first_row();
    }

    public function add_category($image,$id=NULL) {
		//print_r($id);die;
		//echo $image; die;
			$data = array(
				'cat_parent_id' => $this->input->post('cat_parent_id'),
				'cat_name' => $this->input->post('cat_name'),

		);
		  if($image != ''){
			  	$data['cat_image']=$image;
              }
		if($id == NULL){
			// need to create entery
			$data['cat_created_date'] = date("Y-m-d:H:i:s");
			return $this->db->insert('service_category', $data);
		}
		// need to update entery
		$data['cat_updated_date'] = date("Y-m-d:H:i:s");
		$this->db->where('cat_id',$id);
		return $this->db->update('service_category', $data);
	}

  public function update_status($id, $status){
    //echo "bk";die;
	$data=array(

		'cat_status' => $status,
		);
	$this->db->where('cat_id',$id);
	$row = $this->db->update('service_category',$data);
   return $row;
	}

  public function remove_category($id){
		$this->db->where('cat_id',$id);
		$this->db->delete('service_category');
	}





  }

 ?>
