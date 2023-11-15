<?php 

class Kelas extends CI_Controller{


    public function index(){

        $data = [
            'page' => 'class/index',
            'title' => 'Kelas'
        ];


        $this->load->view('index', $data);

    }


}


?>
