<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index(){
		
		$data['title'] = 'Sample Projects Supports';

		$this->load->view('common/header', $data);
		$this->load->view('dashboard');
		$this->load->view('common/footer');
	}
}