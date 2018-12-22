<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Flogin extends CI_Controller {

     public function index() {
 
         // Fungsi Login
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
             $this->simple_login->flogin($username,$password, base_url('pagefg'), base_url('flogin'));
         }
         // End fungsi login
         $this->load->view('account/f_login');
		 
     }
     public function logout(){
         $this->simple_login->logout();
     }        
 }