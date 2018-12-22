<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
 
 class Orderfg extends CI_Controller {
     
     function __construct(){
         parent::__construct();
         $this->load->library(array('form_validation'));
         $this->load->helper(array('url','form'));
         $this->load->model('m_account'); //call model
		 $this->simple_login->cek_login();
     }
 
     public function index() {
		 $this->form_validation->set_rules('duedate', 'duedate', 'trim|required|valid_date[y-m-d,-]');
		 $this->form_validation->set_rules('location', 'location','required');
		 $this->form_validation->set_rules('time', 'time','required');
         if($this->form_validation->run() == FALSE) {
            $message = "Please insert valid input !";
			echo "<script type='text/javascript'>alert('$message'); window.location.href='".site_url()."/dashboard';</script>";
         }else{
 
             $data['duedate']   =    $this->input->post('duedate');
             $data['location'] =    $this->input->post('location');
             $data['message']  =    $this->input->post('message');
			 $data['time']  =    $this->input->post('time');
			 
			date_default_timezone_set('Asia/Jakarta'); # add your city to set local time zone
			$data['username'] = $_SESSION['username'];
 			$data['ordertime']  = date('Y-m-d H:i:s');
			$data['fotografer']=$_POST['order'];
			
			$username = $_SESSION['username']; 
			$this->db->select('kategori');
			$this->db->from('fglist');
			$this->db->where('username',$username);
			$query=$this->db->get();
			$row=$query->row_array();
	
			$data['kategori']=$row['kategori'];
 			$this->m_account->daftarorder($data);
             
            $message = "Thank you for order";
			echo "<script type='text/javascript'>alert('$message'); window.location.href='".site_url()."/dashboard';</script>";
 
				}
            
         } 
	public function cancel(){
			$orderid = $_POST['cancel']; 
			$this -> db -> where('id_order', $orderid);
  			$this -> db -> delete('orderfg');
			$this->load->view('dashboard/setAcc');
	}
}
 