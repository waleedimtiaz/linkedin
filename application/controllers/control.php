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
	$this->load->view('HnF/footer');
	
	}

	public function whatislinkedin()
	{
	$this->load->view('style');
	$this->load->view('HnF/head');
	$this->load->view('whatis');
	$this->load->view('HnF/footer');
	}

	public function signin()
	{
	$this->load->view('style');
	$this->load->view('HnF/head');
	$this->load->view('signin');
	$this->load->view('HnF/footer1');
	}

	public function joinnow()
	{
	$this->load->view('style');
	$this->load->view('join1');
	$this->load->view('HnF/footer1');
	}

	public function changepw()
	{
	$this->load->view('HnF/head');
	$this->load->view('style');
	$this->load->view('changepw');
	$this->load->view('HnF/footer1');
	}
	
	public function index()
	{
		$this->load->view('style');
		$this->loadpage();
		

	}	
}
