<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class control extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		//$this->load->model('Donor_model');
	}
	public function loadpage()
	{	
	$this->load->view('HnF/head');
	$this->load->view('signup');
	$this->load->view('find');	
	$this->load->view('HnF/footer1');
	$this->load->view('HnF/footer');
	$this->load->view('HnF/footer2');
	}

	public function whatislinkedin()
	{
	$this->load->view('style');
	$this->load->view('HnF/head');
	$this->load->view('whatis');
	$this->load->view('HnF/footer');
	$this->load->view('HnF/footer2');
	}

	public function signin()
	{
	$this->load->view('style');
	$this->load->view('HnF/head');
	$this->load->view('signin');
	$this->load->view('HnF/footer2');
	}
	
	public function index()
	{
		$this->load->view('style');
		$this->loadpage();
		

	}	
}
