<?php defined('BASEPATH') OR exit('No direct script access allowed');

//http://localhost/attendanceapp/index.php/apiclass/students/format/json
/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Phil Sturgeon
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';
//require APPPATH.'/controllers/rooms.php';
//require APPPATH.'/controllers/timetable.php';
//require APPPATH.'/controllers/courses.php';

class Apiclass extends REST_Controller
{
	function __construct()
    {
        // Construct our parent class
        parent::__construct();
        echo "REST controller";

        // Configure limits on our controller methods. Ensure
        // you have created the 'limits' table and enabled 'limits'
        // within application/config/rest.php
        $this->methods['user_get']['limit'] = 500; //500 requests per hour per user/key
        $this->methods['user_post']['limit'] = 100; //100 requests per hour per user/key
        $this->methods['user_delete']['limit'] = 50; //50 requests per hour per user/key
    }
    
    function user_get()
    {
        if(!$this->get('id'))
        {
        	$this->response(NULL, 400);
        }

        // $user = $this->some_model->getSomething( $this->get('id') );
    	$users = array(
			1 => array('id' => 1, 'name' => 'Some Guy', 'email' => 'example1@example.com', 'fact' => 'Loves swimming'),
			2 => array('id' => 2, 'name' => 'Person Face', 'email' => 'example2@example.com', 'fact' => 'Has a huge face'),
			3 => array('id' => 3, 'name' => 'Scotty', 'email' => 'example3@example.com', 'fact' => 'Is a Scott!', array('hobbies' => array('fartings', 'bikes'))),
		);
		
    	$user = @$users[$this->get('id')];

        if($user)
        {
            $this->response($user, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'User could not be found'), 404);
        }
    }
    
    function user_post()
    {
        //$this->some_model->updateUser( $this->get('id') );
        $message = array('id' => $this->get('id'), 'name' => $this->post('name'), 'email' => $this->post('email'), 'message' => 'ADDED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }





    function user_delete()
    {
    	//$this->some_model->deletesomething( $this->get('id') );
        $message = array('id' => $this->get('id'), 'message' => 'DELETED!');
        
        $this->response($message, 200); // 200 being the HTTP response code
    }
    
    function students_get(){
        echo "Students are";
        //$users = $this->some_model->getSomething( $this->get('limit') );
        $this->load->model('student_model');
        $students= $this->student_model->studentData();

        if($students)
        {
            $this->response($students, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any students!'), 404);
        }
    }
    function rooms_get(){

       $roomObj= new rooms();
        $rooms=$roomObj->fetchRoom();
        if($rooms)
        {
            $this->response($rooms, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any rooms!'), 404);
        }
    }
    function timetable_get(){

        $timetableObj= new timetable();
        $timetableData=$timetableObj->fetchTimetable();
        if($timetableData)
        {
            $this->response($timetableData, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any timetable!'), 404);
        }
    }
    function courses_get(){


        $courseObj= new courses();
        $courseData= $courseObj->fetchCourses();
        if($courseData)
        {
            $this->response($courseData, 200); // 200 being the HTTP response code
        }

        else
        {
            $this->response(array('error' => 'Couldn\'t find any course!'), 404);
        }



    }


	public function send_post()
	{
		var_dump($this->request->body);
	}


	public function send_put()
	{
		var_dump($this->put('foo'));
	}
}