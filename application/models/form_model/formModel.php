<?php
class FormModel extends CI_Model{
	public function _construct(){
		parent::_construct();
	}
	function add($data){
		$this->db->insert('peserta',$data);
	}
}
?>