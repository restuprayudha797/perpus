<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Major extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();


		$this->load->model('Major_model', 'mm');
	}

	public function index()
	{

		$majorData = $this->mm->getAllMajor();
		$data = [
			"page" => 'masterdata/index',
			"title" => 'Jurusan',
			"majorData" => $majorData
		];


		$this->load->view('index', $data);
	}

	public function addMajor()
	{

		$data = [
			'major_name' => $this->input->post('major_name'),
			'major_code' => $this->input->post('major_code'),
		];

		$insert = $this->db->insert('major', $data);
		if ($insert) {

			$majorData = $this->db->get('major')->result_array();
			header('Content-Type: application/json');
			echo json_encode($majorData);
		}else{
			echo 'gagal';
		}
	}
}
