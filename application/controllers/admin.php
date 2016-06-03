<?php
class Admin extends CI_Controller{
	public function _construct(){
	parent::_construct();
		$this->load->model('admin_model/adminModel');
		$this->load->helper(array('url','form'));
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('admin_view/adminView');
	}
	public function home($id=0){
		$logged_in=$this->session->userdata('logged_in');
		if(!$logged_in){
			redirect(site_url('admin'));
		}
		else{
		$jml=$this->db->get('peserta');
		$config['base_url']=base_url().'admin/home';
		$config['total_rows']=$jml->num_rows();
		$config['per_page']='14';
		$config['first_page']='Awal';
		$config['last_page']='Akhir';
		/*$config['next_page']='&laquo;';
		$config['prev_page']='&raquo;';*/
		$config['full_tag_open']='<ul class="tsc_pagination tsc_paginationA tsc_paginationA01">';
		$config['full_tag_close']='</ul>';
		$config['prev_link']='&lt;';
		$config['prev_tag_open']='<li>';
		$config['prev_tag_close']='</li>';
		$config['next_link']='&gt;';
		$config['next_tag_open']='<li>';
		$config['next_tag_close']='</li>';
		$config['cur_tag_open']='<li class="current"> <a href="#">';
		$config['cur_tag_close']='</a></li>';
		$config['num_tag_open']='<li>';
		$config['num_tag_close']='</li>';
		$config['last_tag_open']='</li>';
		$config['last_tag_close']='</li>';
		$config['first_link']='&lt;&lt;';
		$config['last_link']='&gt;&gt;';
		$this->pagination->initialize($config);
		$data['onclick_report'] = site_url()."/reportController/cetak/"; // button report
		$data['total_rows']=$jml->num_rows();
		$data['halaman']=$this->pagination->create_links();
		$data['query']=$this->adminModel->ambil_peserta($config['per_page'],$id);
		$this->load->view('admin_view/home',$data);
		}
	}
	
	public function validation(){ 
		$username=$this->input->post('username','true');
		$password=$this->input->post('password','true');
		$temp_account=$this->adminModel->check_user_account($password,$username)->row();
		$num_account=count($temp_account);
		$this->form_validation->set_value('username','Username','required');
		$this->form_validation->set_value('password','Password','required');	
			if($num_account>0){
				$array_item=array(
								  'username'=>$temp_account->username,
								  'logged_in'=>true);
				$this->session->set_userdata($array_item);
				redirect(site_url('admin/home'));
			}
			else{
				$this->session->set_flashdata('notification','Peringatan : Username dan Password tidak valid');
				redirect(site_url('admin'));
				//$this->load->view('admin_view/adminView');
			}
	}
	public function cari(){
		$this->load->view('admin_view/_searching');
	}
	public function cetak()
	{
		$logged_in=$this->session->userdata('logged_in');
		if(!$logged_in){
			redirect(site_url('admin'));
		}
		$this->load->model('model_data');
		$data['data'] = $this->model_data->tampil();
		ob_start();
		$content = $this->load->view('data',$data);
		$content = ob_get_clean();		
		$this->load->library('html2pdf');
		try{
			$html2pdf = new HTML2PDF('L', 'A4', 'fr');
			$html2pdf->pdf->SetDisplayMode('fullpage');
			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
			$html2pdf->Output('Seminar_PIMPI.pdf');
		}
		catch(HTML2PDF_exception $e) {
			echo $e;
			exit;
		}	
	}
	public function e_ticket($id)
	{
		$logged_in=$this->session->userdata('logged_in');
		if(!$logged_in){
			redirect(site_url('admin'));
		}
		$this->load->model('model_data');
		$data['data'] = $this->model_data->ambil($id);
		
		ob_start();
		$content = $this->load->view('e_ticket',$data);
		$content = ob_get_clean();		
		$this->load->library('html2pdf');
		try
		{
			$html2pdf = new HTML2PDF('P', 'A4', 'fr');
			$html2pdf->pdf->SetDisplayMode('fullpage');
			$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
			$html2pdf->Output('Tiket Seminar PIMPI.pdf');
		}
		catch(HTML2PDF_exception $e) {
			echo $e;
			exit;
		}
		
	}
	public function logout(){
		$this->session->sess_destroy();
		redirect(site_url('admin'));
	}
	
}