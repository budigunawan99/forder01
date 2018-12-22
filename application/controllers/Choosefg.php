<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Choosefg extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
         parent::__construct();
         $this->simple_login->cek_login();
    }
	public function index()
	{
		$this->load->view('dashboard/wrapper');
	}
	public function prawed()
	{
		$this->load->view('kategori/prawedfg');
	}
	
	public function wedding()
	{
		$this->load->view('kategori/wedding');
	}
	public function graduation()
	{
		$this->load->view('kategori/graduation');
	}
	public function birthday()
	{
		$this->load->view('kategori/birthday');
	}
	
	public function formal()
	{
		$this->load->view('kategori/formal');
	}
	
	public function detailfg()
	{
		$this->load->view('kategori/thedetailfg');
	}
	
}