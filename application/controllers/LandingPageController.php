<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LandingPageController extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Project Loco';

		$this->load->view('templates/header', $data);
		$this->load->view('landingpage/mainpage');
		$this->load->view('templates/footer');
		$this->load->view('landingpage/script');
	}

}


