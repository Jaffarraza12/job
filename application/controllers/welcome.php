<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	
	public function __construct()
	{
		
		parent::__construct();

		$this->load->database();
		$this->load->helper('url');
		
		$this->load->model('users');
		
		$this->load->library('cart');
		
		$this->load->library('session');

	}
	


	public function index()
	{
		
		$this->load->view('landing_page');		
		
	}
	
	
	
}