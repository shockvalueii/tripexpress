<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destinations extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->is_logged_in();
	}
	function index(){
		$data['main_content'] = 'backend/destinations/destinations';
		$data['title'] = 'Destinations';
		$this->load->view('includes/template', $data);
	}
	function add_to(){
		echo 'add to';
	}
	

	private function is_logged_in()
	{
		$is_logged_in = $this->session->userdata('is_logged_in');

		if (!isset($is_logged_in) || $is_logged_in != true) {
			echo 'login please';
			die();
		}
	}
}
?>