<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date_picker extends CI_Controller {
	 
	public function index(){
		
		$data['title'] = 'Sample Projects Supports';
		$data['country'] = $this->Common_model->fetch_country();

		$this->load->view('common/header', $data);
		$this->load->view('date_picker', $data);
		$this->load->view('common/footer');
	}
	
}