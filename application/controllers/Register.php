<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Register extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
     }
 
     public function index() {
 		 
         $this->form_validation->set_rules('name', 'NAME','required');
         $this->form_validation->set_rules('username', 'USERNAME','required');
         $this->form_validation->set_rules('email','EMAIL','required|valid_email');
         $this->form_validation->set_rules('password','PASSWORD','required|min_length[5]');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/v_register');
         }else{
 
             $data['nama']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
             $data['password'] =    md5($this->input->post('password'));
 			
			$user_check =  $this->db->query("SELECT * FROM users where email='".$this->input->post('email')."'")->num_rows();
			
			if ($user_check > 0){
				 //set notifikasi
             	  $this->session->set_flashdata('unregistered','Duplicate email occured');
 
             	//alihkan ke halaman login
             	  redirect(site_url('Register'));
			}
				else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
 			  		$this->m_account->daftar($data);
             
             		//$pesan['message'] =    "Pendaftaran berhasil";
             
             		$this->session->set_flashdata('sukses','Pendaftaran berhasil. Silahkan login!');
					
					redirect(site_url('login'));
				}
            
         }
     }
 }