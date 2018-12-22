<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Dashboard extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
     }
 
     //Load Halaman dashboard
     public function index() {
         $this->load->view('dashboard/Wrapper');
		 
		 $username = $this->session->userdata('username');
		 $userImage = $this->session->userdata('avatar');
		 $defaultImage = 'No_Avatar.png';
		 $avatar = (file_exists('uploads/'.$userImage)) ? $userImage : $defaultImage;
			$data = array(
               	'avatar' => $avatar
            );
		$this->db->where('username', $username);
		$this->db->update('users', $data); 
		$avatars = $data['avatar'];
		$this->session->set_userdata('avatar',$avatars);
     }
 }

