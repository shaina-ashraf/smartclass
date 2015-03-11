<?php if (!defined('BASEPATH')) die();
class Metro extends CI_Controller {
   public function index()
	{
      $this->load->view('include/header');
      $this->load->view('welcome-smartclassroom');
      $this->load->view('include/footer');
	}
}
/* End of file smartclassroom.php */
/* Location: ./application/controllers/smartclassroom.php */
?>	