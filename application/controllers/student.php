<?php
class Student extends CI_Controller{

    function __construct(){

        parent::__construct();

}
    public function index()
    {
        echo 'Hello student!';
    }
    function getStudents(){

        $this->load->model('student_model');
        $data['query']= $this->student_model->studntData();
        $this->load->view('student_view',$data);

    }
    public function listStudents() {


        $this->load->model('student_model');
        $data['query']= $this->student_model->studentData();
        $data = array('response' => $data);

        $this->load->view('json_view', $data);
    }
}
/**
 * Created by PhpStorm.
 * User: Shaina
 * Date: 2/16/15
 * Time: 7:11 PM
 */