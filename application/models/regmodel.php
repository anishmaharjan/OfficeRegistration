<?php
class Regmodel extends CI_Model
{
	
	function __construct(){
		parent::__construct();
	}
	public function get_all()
	{
		$query = $this->db->get('staffs');
		return $query->result();
	}

	public function can_log_in()
	{
		
		$this->db->where('name',$this->input->post('username')); //$this->input->get('userid') //$postuname
		$this->db->where('password',md5($this->input->post('mpassword'))); //$this->input->post('mpassword') //$postpassword

		$query = $this->db->get('staffs');

		if($query ->num_rows() == 1)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
}

