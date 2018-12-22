<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Pagefg extends CI_Controller {
     function __construct(){
         parent::__construct();
         $this->simple_login->cek_loginfg();
     }
 
     //Load Halaman dashboard
     public function index() {
         $this->load->view('dashboard/pagefg');
     }
	 public function konfirmasi(){
			
			$data = array(
        		'status' => 'submitted'
			);
			
				if(isset($_POST['submit'])){
					$orderid = $_POST['submit']; 					
		 			$this -> db -> where('id_order', $orderid);
  					$this -> db -> update('orderfg',$data);
                }
			
			 
			$datano = array(
        		'status' => 'refused'
			);
			
				if(isset($_POST['cancel'])){
					$orderidno = $_POST['cancel'];					
		 			$this -> db -> where('id_order', $orderidno);
  					$this -> db -> update('orderfg',$datano);
                }
			$this->load->view('dashboard/pagefg');
	}	
 }
