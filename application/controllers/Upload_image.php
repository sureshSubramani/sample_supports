<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload_image extends CI_Controller {

	public function __construct(){
        parent::__construct();
    }

	public function index(){
		
		$data['title'] = 'Upload Image';

		$this->load->view('common/header', $data);
		$this->load->view('upload_image', $data);
		$this->load->view('common/footer');
	}
    
    public function do_upload(){

                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('imgFile'))
                {
					    $data['title'] = 'Upload Image';
                        $error = $this->upload->display_errors();

						//$this->session->set_flashdata("error",$error);						
						//
						$this->session->set_flashdata("error",$error); 
						$this->session->unset_userdata("success");
						redirect(base_url('upload_image'),'refresh');
						//echo $error;						
                }
                else
                {
					$data['title'] = 'Upload Image';						
					//$this->session->set_flashdata("success",'Successfully Uploaded..');						
					$this->session->set_flashdata("success",'Successfully Uploaded..'); 
					$this->session->unset_userdata("error"); 
					//echo 'success';
					redirect(base_url('upload_image'),'refresh');
				}
				
				
    }
	
}