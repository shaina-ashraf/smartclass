<?php

class student_model extends CI_Model{

    function __construct(){

        parent::__construct();
    }
    function studentData(){

        $this->load->database();
        $query= $this->db->get('students');
        return $query->result();

    }
}


