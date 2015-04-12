<?php
class Regmodel extends CI_Model
{
	var $variable;
	
	function __construct(){
		parent::
		__construct();
	}
	public function get_all()
	{
		$query = $this->db->get('staffs');
		return $query->result();
	}

	public function can_log_in()
	{
		$this->db->where('id',$this->input->get('userid'));
		$this->db->where('password',md5($variable));

		$query = $this->db->get('staffs');

		if($query ->num_rows() ==1)
		{
			return true;
		}
		else
		{
			return false;
		}

	}
	public function get_variables($variable){
		$this->variable = $variable;
	}
}

?>