 <?php defined('BASEPATH') OR exit('No direct script access allowed');  
 class Emails extends CI_Model {  
  public function send($message,$email)  
  {  
    // email link reset
    $config['protocol'] = "smtp";
    $config['smtp_host'] = "ssl://smtp.googlemail.com";
    $config['smtp_port'] = '465';
    $config['smtp_user'] = "fordercompany@gmail.com"; // ganti dengan emailmu sendiri
    $config['smtp_pass'] = "black&whites"; // ganti dengan password emailmu
    $config['charset'] = "iso-8859-1";
    $config['mailtype'] = "html";
    $config['newline'] = "\r\n";
 	$this->load->library('email', $config); 
    $this->email->initialize($config);
 
    $this->email->from('fordercompany@gmail.com', 'FORDER');
    $this->email->to($email);
    $this->email->subject('Reset Password');
 
    $this->email->message($message,$email);
 
    if (!$this->email->send($message,$email)) {
       echo $this->email->print_debugger();
       exit;
    }
  }  
 }  