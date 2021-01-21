<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_users');					
	}

	public function index()
	{	
		$count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){            
            $this->load->view('invalid_serial_number');
		}else if($this->session->userdata('is_login') != true){
			$this->load->view('login');							
		}else{
			redirect('admin/dashboard');		 				
		}										
	}

	public function aksi_login(){			
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));
	
		if($this->session->userdata('is_login') != true){			
			$data_session = $this->Model_users->check_usr($username,$password);
		if($data_session == FALSE){
			$this->session->set_flashdata('error', 'Username and Password is not correct');
			redirect('login');
		}else{						
			$this->session->set_userdata('is_login',true);
			$this->session->set_userdata('user_id',$data_session->user_id);
			$this->session->set_userdata('userfullname',$data_session->usr_fullname);
			$this->session->set_userdata('username',$data_session->user_name);
			$this->session->set_userdata('group',$data_session->usr_group);
			$this->session->set_userdata('user_access',$data_session->user_all_access);
			$this->session->set_userdata('user_group_access',$data_session->user_group_all_access);
			$this->session->set_userdata('background_access',$data_session->background_all_access);
			$this->session->set_userdata('report_access',$data_session->report_all_access);
			$this->session->set_userdata('location_access',$data_session->location_all_access);
			$this->session->set_userdata('declaration_form_access',$data_session->declaration_form_all_access);										
			$this->session->set_userdata('my_task_access',$data_session->my_task_all_access);										
			$this->session->set_userdata('visitor_in_building_access',$data_session->visitor_in_building_all_access);										
			$this->session->set_userdata('location_my_task_access',$data_session->location_my_task_all_access);            
			$this->session->set_userdata('recap_visitor_access',$data_session->recap_visitor_all_access);            
			redirect('admin/dashboard');		 				
	}
		}else{						
			redirect('admin/dashboard');		 				
	}		
	}	
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	public function admin_logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}	
}