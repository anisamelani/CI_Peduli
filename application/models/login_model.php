<?php
class Login_model extends CI_Model {

	public function cek_login($user_password, $user_nama){
		$where = array(
										'user_password' => $user_password,
										'user_nama' => $user_nama
									);
		$this->db->where($where);
		$row  = $this->db->get('user');
		
		return $row->num_rows();
	}
	
	public function set_user($data){	
		$user_password = $data['user_password'];
		$where = array(
						'user_password' => $user_password
						);
		$this->db->where($where);
		$row  = $this->db->get('user');
		
		if($row->num_rows()>0)
			return 'duplicate';
		else		
			return $this->db->insert('user', $data);
	}
	
}