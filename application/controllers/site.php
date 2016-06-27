<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index()
	{

		redirect('reset');

	}

	public function reset()
	{

		$this->session->unset_userdata('counter');
		$this->session->sess_destroy();
		redirect();
	}

}