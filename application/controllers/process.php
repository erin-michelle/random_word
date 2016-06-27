<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Process extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->output->enable_profiler();
	}


	public function index()
	{

		if($this->input->post('counter')==NULL)
		{
			$counter = 1;
        	$this->session->set_userdata('counter', $counter);
		}
		redirect('generate');

	}

	public function generate()
	{

		$word = substr(md5(rand()), 0, 14);
		$counter = $this->session->userdata('counter');
    	$counter += 1;
    	$this->session->set_userdata('counter', $counter);
		// var_dump($word);
		// die();
	 	$this->load->view('main', array("word"=>$word, "counter" =>$this->session->userdata('counter')));
	}
}	

