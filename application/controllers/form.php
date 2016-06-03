<?php
class Form extends CI_Controller{
	public function _construct(){
	parent::_construct();
	$this->load->model('form_model/formModel');
	$this->load->helper(array('url','form'));
	
	}
	public function index(){
	$this->load->view('form_view/formView');
	}
	public function registration(){
	$this->load->library('form_validation');
	$this->form_validation->set_rules('nama', 'Nama', 'required');
	$this->form_validation->set_rules('nim/nrp', 'NIM/NRP','');
	$this->form_validation->set_rules('no_hp', 'No Hp', 'required');
	$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
	$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
	$this->form_validation->set_rules('univ', 'Univ','');
	$this->form_validation->set_rules('tingkatan','Tingkatan','');
	$this->form_validation->set_rules('harapan', 'Harapan', 'required');
	
	$data['nama']=$this->input->post('nama');
	$data['nim_nrp']=$this->input->post('nim/nrp');
	$data['no_hp']=$this->input->post('no_hp');
	$data['email']=$this->input->post('email');
	$data['pendidikan']=$this->input->post('pendidikan');
	$data['univ']=$this->input->post('univ');
	$data['tingkat']=$this->input->post('tingkatan');//radio
	$data['harapan']=$this->input->post('harapan');
	if ($this->form_validation->run() == FALSE)
{
//redirect(site_url('form'));
$this->load->view('form_view/formView');
} else
{
	$this->formModel->add($data);
	$this->load->view('form_view/form_confirmView',$data);
}
}
	public function admin(){
	redirect(site_url('admin'));
	}
}