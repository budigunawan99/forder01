<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Fregister extends CI_Controller {
     
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
		 $this->form_validation->set_rules('birthday', 'birthday', 'trim|required|valid_date[y-m-d,-]');
		 $this->form_validation->set_rules('alamat', 'ALAMAT','required');
		 $this->form_validation->set_rules('telp', 'TELP','required');
         $this->form_validation->set_rules('password','PASSWORD','required|min_length[5]');
         $this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
         if($this->form_validation->run() == FALSE) {
             $this->load->view('account/f_register');
         }else{
 
             $data['nama']   =    $this->input->post('name');
             $data['username'] =    $this->input->post('username');
             $data['email']  =    $this->input->post('email');
			 $data['tanggal_lahir']  =    $this->input->post('birthday');
             $data['password'] =    md5($this->input->post('password'));
			 $data['kategori']  =    $this->input->post('myselectbox');
			 $data['alamat']  =    $this->input->post('alamat');
			 $data['telp']  =    $this->input->post('telp');
			 $data['gender']  =    $this->input->post('gender');
			 
			 date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
			 
 			 $data['waktu']  = date('Y-m-d H:i:s');
			$user_check =  $this->db->query("SELECT * FROM fglist where email='".$this->input->post('email')."'")->num_rows();
			
			if ($user_check > 0){
				 //set notifikasi
             	  $this->session->set_flashdata('unregistered','Duplicate email occured');
 
             	//alihkan ke halaman login
             	  redirect(site_url('Fregister'));
			}
				else { //proses menambahkan data, tambahkan sesuai dengan yang kalian gunakan
 			  		$this->m_account->daftarfotografer($data);
             
             		//$pesan['message'] =    "Pendaftaran berhasil";
             
             		$this->session->set_flashdata('sukses','Pendaftaran berhasil. Silahkan login!');
					
					redirect(site_url());
				}
            
         }
     }
 }