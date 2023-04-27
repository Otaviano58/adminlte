<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->library('form_validation');
		date_default_timezone_set('America/Sao_Paulo');
	}
	function index() {
		redirect('Login');

	}
}