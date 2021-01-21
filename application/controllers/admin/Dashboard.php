<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
		
	public function __construct ()
	{
		parent::__construct();	

		$count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){
            $this->session->set_flashdata('error','Invalid Serial Number');    
            redirect('login');  
		}
		
		if($this->session->userdata('is_login') !=  true)
        {
            $this->session->set_flashdata('error','You have no access to that page.');
            redirect('login');  
        }			
	}
	
	public function index()
	{				
		$this->load->view('backend/dashboard');
	}


}



