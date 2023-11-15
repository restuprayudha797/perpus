<?php 


class Dashboard extends CI_Controller{


    public function index(){

        $data = [
            'page' => 'dashboard/index',
            'title' => 'Dashboard'
        ];

        $this->load->view('index', $data);


    }


}



?>
