<?php
class AdminModel extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	function check_user_account($password,$username){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->where('password',$password);
		$this->db->where('username',$username);
		return $this->db->get();
	}
	function select_all(){
		$this->db->select('*');
		$this->db->from('peserta');
		return $this->db->get();
	}
	function ambil_peserta($num,$offset){
		$this->db->order_by('nama','ASC');
		$data=$this->db->get('peserta',$num,$offset);
		return $data->result();
	}
	function search($nama){
		$this->db->select('*');
		$this->db->from('peserta');
		$this->db->like('nama',$nama,'both');
		return $this->db->get();
	}
}
?>