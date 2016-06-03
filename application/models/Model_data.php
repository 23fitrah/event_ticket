<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Model_data extends CI_Model
{
	function tampil()
	{
		$query = $this->db->query("Select * from peserta order by nama asc");
		return $query;
	}
}