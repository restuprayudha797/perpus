<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Major extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Major';
		$this->load->view('src/layout/header', $data);	
		$this->load->view('src/layout/topbar', $data);
		$this->load->view('src/layout/sidebar');	
		$this->load->view('src/masterdata/major');
		$this->load->view('src/layout/footer');			
	}

}

/* End of file Major.php */
/* Location: ./application/controllers/Major.php */
 ?>