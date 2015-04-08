<?php
class Regmodel extends CI_Model
{

	public function get_all()
	{
		$query = $this->db->get('staffs');
		return $query->result();
	}

	public function can_log_in()
	{
		$this->db->where('id',$this->input->post('userid'));
		$this->db->where('password',md5($this->input->post('mpassword')));

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
}

?>