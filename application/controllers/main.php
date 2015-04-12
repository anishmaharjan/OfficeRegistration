<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {
	//var $passwordhere;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('regmodel');
	}
	
	public function index()
	{
		$this->login();
	}

	public function login()
	{
		$this->load->view("view_mainlogin");
	}

	public function display()
	{
		
		if($this->regmodel->get_all())
			$data['records'] = $this->regmodel->get_all(); 
		$this->load->view('view_content',$data);
	}

	public function memberlogin()
	{
		$data['id'] = $this->input->get("id");
		$this->load->view("memlogin",$data);

	}

	public function login_validation()
	{
		$this->load->library('form_validation');

		$this->form_validation->set_rules('username','Username_ID','callback_validate_credentials');
		$this->form_validation->set_rules('mpassword','Mpassword','required|md5');
		
		//var $passwordhere;
		 $passwordhere = $this->input->post('mpassword');
		global $passwordhere;
		if($this->form_validation->run())
		{
			$data = array(
				'userid' => $this->input->get('id'),//what to put here?
				'is_logged_in' => 1
				);
			$this->session->set_userdata($data);
			redirect('main/display'); //<<<<<<----- ReDIRECT PAGE
		}
		else{
			echo "BEEEEEEEEEP";
			echo "<br>";
			echo $this->input->post('username');
			echo "<br>";
			echo $this->input->post('mpassword');
		}
	}

	public function validate_credentials()
	{
		
		//$this->load->model('regmodel');
		$this->regmodel->get_variables($passwordhere);
		if($this->regmodel->can_log_in())
		{
			return true;
		}
		else
		{
			$this->form_validation->set_message('validate_credentials','Incorrect Password');
			return false;
		}
	}


}
