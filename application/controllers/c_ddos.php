<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_ddos extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index(){
	$this->showinterface();
		
	}
	 public function __construct() {
        parent::__construct();
		$this->load->library('encrypt');
		$this->load->helper('tool_helper');
		
    }
	
	
	public function showinterface(){
		$data=array(""=>"");
		
		$this->load->view('v_ddos',$data);
	}
	
	public function descrypt(){
	
		$data = array();
		//load encrypt library
		//$this->load->library('encrypt');
		/*
		if ($this->input->post('userinput')) {
		//get the hash result
		$hash = $this->encrypt->encode($this->input->post('userinput'));
		$data["hash"] = $hash;
		}
		*/
		
		
		$key = $this->input->post('key');
		$encrypted_string = $this->input->post('chiper');
		$descrypt=$this->encrypt->decode($encrypted_string);
		$data["decode"]=$descrypt;
		//echo $encrypted_string; die();
		$this->load->view('v_encrypt',$data);
	}
	
	
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */