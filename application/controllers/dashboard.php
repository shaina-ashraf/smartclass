<?php
/**
 * Created by PhpStorm.
 * User: Shaina
 * Date: 3/2/15
 * Time: 4:13 PM
 */

class dashboard extends CI_Controller{

    public function index()
    {
        $this->load->view('dashboard_view');
    }
} 