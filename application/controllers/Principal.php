<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

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
    
    public function index()
    {
        $this->load->view('index');
    }
        
    public function robo(){
        $this->load->view('robo');
    }
    
    public function nosotros(){
        $this->load->view('nosotros');
    }
    
    public function sendMail(){
        
        $email = $this->input->post("email");
        $message = $this->input->post("message");
        
        //$ci = get_instance();
        
        $config = array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'mail.sosciclista.com.mx',
            'smtp_port' => 587,
            'smtp_user' => 'info@sosciclista.com.mx',
            'smtp_pass' => 'w%$2+_,Kt9Xd',
            //'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            //'mailtype' => 'text', //plaintext 'text' mails or 'html'
            //'smtp_timeout' => '4', //in seconds
            'charset' => 'iso-8859-1',
            'wordwrap' => TRUE
        );
        
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from('info@sosciclista.com.mx', 'Info ciclista');
        $this->email->to($email);
        $this->email->cc('info@sosciclista.com.mx');
        //$this->email->bcc('them@their-example.com');

        $this->email->subject('Comentarios');
        $this->email->message("Hemos recibido tu correo, en breve te resolveremos tus dudas<br>Gracias<br>".$message."");

        if ($this->email->send()) {
             echo 'Your Email has successfully been sent.';
        }else{
            echo "failutre";
        }        
    }
}
