<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dynamic_dependent extends CI_Controller {
	 
	public function index(){
		
		$data['title'] = 'Sample Projects Supports';
		$data['country'] = $this->Common_model->fetch_country();

		$this->load->view('common/header', $data);
		$this->load->view('dynamic_dependent', $data);
		$this->load->view('common/footer');
	}

	function fetch_state(){
		if($this->input->post('country_id')){
			echo $this->Common_model->fetch_state($this->input->post('country_id'));
		}
	}

	function fetch_city(){
		if($this->input->post('state_id')){
			echo $this->Common_model->fetch_city($this->input->post('state_id'));
		}
	}
}