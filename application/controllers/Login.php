<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('global/view_header');
		$this->load->view('login/view_login');
		$this->load->view('global/view_footer');
	}
}
 