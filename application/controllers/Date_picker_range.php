<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Date_picker_range extends CI_Controller {
	 
	public function index(){
		
		$data['title'] = 'Sample Projects Supports';
		$data['country'] = $this->Common_model->fetch_country();

		$this->load->view('common/header', $data);
		$this->load->view('date_picker_range', $data);
		$this->load->view('common/footer');
	}
	
}