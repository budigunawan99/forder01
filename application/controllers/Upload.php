<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('dashboard/Wrapper', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				$this->load->model("mupload");
				
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('dashboard/setAcc', $error);
						 
                }
                else
                {		$this->mupload->insert_images($this->upload->data());
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('dashboard/setAcc', $data);
                }
				if (!empty($_FILES['avatar']['name'])) {
        
        			// Konfigurasi library upload codeigniter
        			$config['upload_path'] = './uploads/';
        			$config['allowed_types'] = 'gif|jpg|png';
        			$config['max_size'] = 2000;
        			$config['file_name'] = $this->session->userdata('avatar');
 
        			// Load library upload
        			$this->load->library('upload', $config);
        
        			// Jika terdapat error pada proses upload maka exit
        			if (!$this->upload->do_upload('avatar')) {
            			exit($this->upload->display_errors());
        			}
 
        			$data['avatar'] = $this->upload->data()['file_name'];
      			}	
 
        }
		
		public function do_uploadfg()
        {
                $config['upload_path']          = './assets/gallery1/images/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				$this->load->model("mupload");
				
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('dashboard/pagefg', $error);
						 
                }
                else
                {		$this->mupload->insert_imagesfg($this->upload->data());
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('dashboard/pagefg', $data);
                }
				if (!empty($_FILES['avatar']['name'])) {
        
        			// Konfigurasi library upload codeigniter
        			$config['upload_path'] = './assets/gallery1/images/';
        			$config['allowed_types'] = 'gif|jpg|png';
        			$config['max_size'] = 2000;
        			$config['file_name'] = $this->session->userdata('avatar');
 
        			// Load library upload
        			$this->load->library('upload', $config);
        
        			// Jika terdapat error pada proses upload maka exit
        			if (!$this->upload->do_upload('avatar')) {
            			exit($this->upload->display_errors());
        			}
 
        			$data['file_name'] = $this->upload->data()['file_name'];
      			}	
 
        }
		
		 public function profilfg()
        {
                $config['upload_path']          = './uploades/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);
				$this->load->model("mupload");
				
                if ( ! $this->upload->do_upload('image_upload_file'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('dashboard/pagefg', $error);
						 
                }
                else
                {		$this->mupload->insert_imagespp($this->upload->data());
                        $data = array('upload_data' => $this->upload->data());
                        $this->load->view('dashboard/pagefg', $data);
                }
				if (!empty($_FILES['avatar']['name'])) {
        
        			// Konfigurasi library upload codeigniter
        			$config['upload_path'] = './uploades/';
        			$config['allowed_types'] = 'gif|jpg|png';
        			$config['max_size'] = 2000;
        			$config['file_name'] = $this->session->userdata('avatar');
 
        			// Load library upload
        			$this->load->library('upload', $config);
        
        			// Jika terdapat error pada proses upload maka exit
        			if (!$this->upload->do_upload('avatar')) {
            			exit($this->upload->display_errors());
        			}
 
        			$data['avatar'] = $this->upload->data()['file_name'];
      			}	
 
        }
		
		public function delete_group()
    	{
            //$group_id = $this->input->post('group_id');
            $group_picture = $this->input->post('group_picture');
			$this->load->model("mupload");
            $this->mupload->delete_group($group_picture);
            redirect('pagefg');
    	}
}
?>