<?php
     // get category in addCategory.php file
    function getCategory()
    {

       $ci = &get_instance();
       $ci->db->select("*");
       $ci->db->from("service_category");
       $ci->db->where("cat_parent_id","0");
       $ci->db->where("cat_status","1");
       return $ci->db->get()->result();
    }


 ?>
