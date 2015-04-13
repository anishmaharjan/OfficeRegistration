<?php
class Regmodel extends CI_Model
{
	var $postpassword;
	var $postuname;
	
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
		global $postpassword;
		global $postuname;
		$this->db->where('id',$postuname); //$this->input->get('userid')
		$this->db->where('password',md5($postpassword));

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
	public function get_variables($postuname, $postpassword){
		$this->postuname = $postuname;
		$this->postpassword = $postpassword;
	}

}

?>