<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
 
  class mupload extends CI_Model{
      function insert_images($image_data = array()){
	  		$username = $this->session->userdata('username');
      		$data = array(
          		'avatar' => $image_data['file_name'],
      		);
	  		$this->db->where('username', $username);

	  		$this->db->update('users', $data);
			$avatar = $data['avatar'];
			$this->session->set_userdata('avatar',$avatar);  
	  
	}
	
	 function insert_imagesfg($image_data = array()){
	  		$username = $this->session->userdata('username');
      		$data = array(
				'username' => $username,
          		'file_name' => $image_data['file_name'],
      		);
	  		$this->db->insert('images', $data);
	  
	}
	
	 function insert_imagespp($image_data = array()){
	  		$username = $this->session->userdata('username');
      		$data = array(
          		'avatar' => $image_data['file_name'],
      		);
	  		$this->db->where('username', $username);

	  		$this->db->update('fglist', $data);
			$avatar = $data['avatar'];
			$this->session->set_userdata('avatar',$avatar);  
	  
	}
	
	function delete_group($group_picture)
        {
                $this->db->where('file_name', $group_picture);

                unlink("assets/gallery1/images/".$group_picture);

                $this->db->delete('images', array('file_name' => $group_picture));
        }

  }