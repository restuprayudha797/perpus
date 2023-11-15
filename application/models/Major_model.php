<?php 


class Major_model extends CI_Model{

    private $TBL_MAJOR = 'major';

    
    public function getAllMajor(){
        return $this->db->get($this->TBL_MAJOR)->result_array();
    }




}


?>
