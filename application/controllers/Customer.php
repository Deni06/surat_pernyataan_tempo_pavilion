<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require FCPATH . 'vendor/autoload.php';

use thiagoalessio\TesseractOCR\TesseractOCR;

class Customer extends CI_Controller {	

	public function __construct ()
	{
		parent::__construct();
		$this->load->model('Customer_model');		
		$this->load->model('general_model');		
	}

	public function index()
	{					
		$count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){            
            return $this->load->view('invalid_serial_number');
		}

		$where_lokasi['is_emergency_gate'] = 1;                   
		$gateway = $this->general_model->get_info("*", "lokasi", $where_lokasi);                            		

		$data['character_checkin'] = "";
		if($gateway != FALSE){
			$data['character_checkin'] = $gateway->row()->character_checkin;
		}		
		
		$data['company'] = $this->general_model->get_info("*", "company")->row_array();                            		
		$this->load->view('scan_qr', $data);		
	}				
	
	public function registrasi($unique_character="")
	{				
		$count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){            
            return $this->load->view('invalid_serial_number');
		}

		if($unique_character != ""){
			$check_unique = $this->Customer_model->check_unique_character($unique_character);			
			$data['location'] = $check_unique;
			if($check_unique != FALSE){	
				if($check_unique->character_checkin == $unique_character){
					$this->load->view('home_view', $data);					
				}else{
					$data['company'] = $this->general_model->get_info("*", "company")->row_array();                            		
					$this->load->view('check_out_success', $data);	
				}								
			}else{				
				$this->session->set_flashdata('error','Please check the QR Code that you scanned');
				redirect('customer');	
			}			
		}else{
			redirect('customer');
		}		
	}

	public function check_in($unique_character)
	{						
		$count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){            
            return $this->load->view('invalid_serial_number');
		}

			$data['check_unique'] = $this->Customer_model->check_character_checkin($unique_character);						
			$data['type'] = $this->session->userdata("IS_REGISTER");
			$data['company'] = $this->general_model->get_info("*", "company")->row_array();                            											
			if($data['check_unique'] != FALSE){
				$this->session->set_userdata("IS_REGISTER", 0);
				$this->load->view('home', $data);	
			}else{
				redirect('customer');	
			}							
	}
	
	public function check_device_id()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$datetime = date('Y-m-d');
		$day_num = date('w', strtotime($datetime));

		if($day_num == 0){
			$day_num = 7;
		}

		$returnarray = array();
		$where_get_registration['character_registration'] = $this->input->post('character_registration');    
		$returnarray['count'] = $this->general_model->get_info("count(1) as count", "registration", $where_get_registration);                
		$returnarray['valid_until_date'] = "";    
		$returnarray['valid_until_time'] = "";    
		$returnarray['is_valid'] = false;    
		$returnarray['is_valid_device'] = false;    
		$returnarray['full_name'] = "";    
		$returnarray['phone_number'] = "";    
		$returnarray['phone_number_local'] = ""; 
		$returnarray['email'] = "";    
		$returnarray['count_surat'] = 0; 
		
		$returnarray['registration_id'] = 0;
		$returnarray['nama_lokasi'] = "";
		$returnarray['checkin_date'] = "";
		$returnarray['registration_number'] = "";
		$returnarray['checkin_time'] = "";
		$returnarray['type_checkout'] = "";
		$returnarray['checkin_floor'] = "";
		$returnarray['status_surat'] = 0;
		$returnarray['id_surat'] = 0;
		$returnarray['background_declaration_form'] = "";
		$returnarray['background_safe_entry_pass'] = "";

		$returnarray['company'] = "";
		$returnarray['address'] = "";		
		$returnarray['official_id_number'] = "";
		$returnarray['reason_rejection'] = "";
		$returnarray['is_rejection_day'] = false;
		$returnarray['destination_company'] = "";
		$returnarray['floor'] = "0";
		$returnarray['ktp_photo'] = "";
		$returnarray['type_id_card'] = "0";
		$returnarray['suhu_tubuh'] = "";
		$returnarray['type_input_official_id_number'] = "0";

		$where_get_background['day'] = $day_num;        										

		$get_background = $this->general_model->get_info("background_color_declaration_form,
		background_color_safe_entry_pass", "background_surat", $where_get_background); 

		if($get_background != FALSE) {               
			$returnarray['background_declaration_form'] = $get_background->row()->background_color_declaration_form;
			$returnarray['background_safe_entry_pass'] = $get_background->row()->background_color_safe_entry_pass;
		}

		$where_check_device['device_id'] = $this->input->post('device_id');    
		$where_check_device['character_registration'] = $this->input->post('character_registration');    
		$check_device = $this->general_model->get_info("count(1) as count", "registration", $where_check_device);                	

  if($check_device != FALSE) {        
      if($check_device->row()->count > 0){ 
		$returnarray['is_valid_device'] = true;    			
      }
  }else{
	echo json_encode($returnarray);
	exit;
  }		
		
		echo json_encode($returnarray);
	}

	public function check_valid_phone()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$datetime = date('Y-m-d');
		$day_num = date('w', strtotime($datetime));

		if($day_num == 0){
			$day_num = 7;
		}

		$returnarray = array();		
		$returnarray['count'] = $this->Customer_model->check_active_phone_number($this->input->post('phone_number'));
		$returnarray['valid_until_date'] = "";    
		$returnarray['valid_until_time'] = "";    
		$returnarray['is_valid'] = false;    		
		$returnarray['full_name'] = "";    
		$returnarray['phone_number'] = "";    
		$returnarray['email'] = "";    
		$returnarray['company'] = "";    
		$returnarray['address'] = ""; 
		$returnarray['official_id_number'] = "";   
		$returnarray['reason_rejection'] = "";
		$returnarray['is_rejection_day'] = false;
		$returnarray['suhu_tubuh'] = "";
		$returnarray['destination_company'] = "";    
		$returnarray['floor'] = "0";    
		$returnarray['ktp_photo'] = "";    
		$returnarray['type_id_card'] = "0";    
		$returnarray['count_surat'] = 0; 
		$returnarray['type_input_official_id_number'] = "0";
		
		$returnarray['registration_id'] = 0;
		$returnarray['nama_lokasi'] = "";
		$returnarray['checkin_date'] = "";
		$returnarray['registration_number'] = "";
		$returnarray['checkin_time'] = "";
		$returnarray['type_checkout'] = "";
		$returnarray['checkin_floor'] = "";
		$returnarray['status_surat'] = 0;
		$returnarray['id_surat'] = 0;
		$returnarray['background_declaration_form'] = "";
		$returnarray['background_safe_entry_pass'] = "";

		$where_get_background['day'] = $day_num;        										

		$get_background = $this->general_model->get_info("background_color_declaration_form,
		background_color_safe_entry_pass", "background_surat", $where_get_background); 

		if($get_background != FALSE) {               
			$returnarray['background_declaration_form'] = $get_background->row()->background_color_declaration_form;
			$returnarray['background_safe_entry_pass'] = $get_background->row()->background_color_safe_entry_pass;
		}
			
			$where_check_surat_device['phone_number'] = $this->input->post('phone_number');    
			$exception['field'] = 'status';
      		$exception['value'] = 3;
			$check_surat_device = $this->general_model->get_info("count(1) as count", "surat_pernyataan", $where_check_surat_device,array(),array(),$exception);                
  
  if($check_surat_device != FALSE) {        
      if($check_surat_device->row()->count > 0){ 
		$returnarray['count_surat'] = $check_surat_device->row()->count;		
					$sorting_surat_device['field'] = 'created_on';
					  $sorting_surat_device['sort'] = 'desc';
					$get_data_surat = $this->general_model->get_info("surat_pernyataan_id, name, email, 
					phone_number, status, company, address, official_id_number, destination_company, floor, 
					foto_ktp, suhu_tubuh, type_input_official_id_number,
					type_id_card, reason_rejection, DATE_FORMAT(created_on, '%Y-%m-%d') as created_date", 
					"surat_pernyataan", $where_check_surat_device, $sorting_surat_device, array(), $exception,array(),array(),1);                
					if($get_data_surat != FALSE) {
						if($get_data_surat->row()->created_date == date('Y-m-d')){
							$returnarray['is_rejection_day'] = true;
						}
						$returnarray['full_name'] = $get_data_surat->row()->name;
		$returnarray['phone_number'] = $get_data_surat->row()->phone_number;
		$returnarray['email'] = $get_data_surat->row()->email;
		$returnarray['status_surat'] = $get_data_surat->row()->status;
		$returnarray['id_surat'] = $get_data_surat->row()->surat_pernyataan_id;
		$returnarray['company'] = $get_data_surat->row()->company;
		$returnarray['address'] = $get_data_surat->row()->address;
		$returnarray['official_id_number'] = $get_data_surat->row()->official_id_number;
		$returnarray['reason_rejection'] = $get_data_surat->row()->reason_rejection;
		$returnarray['suhu_tubuh'] = $get_data_surat->row()->suhu_tubuh;
		$returnarray['destination_company'] = $get_data_surat->row()->destination_company;
		$returnarray['floor'] = $get_data_surat->row()->floor;
		$returnarray['ktp_photo'] = $get_data_surat->row()->foto_ktp;
		$returnarray['type_id_card'] = $get_data_surat->row()->type_id_card;
		$returnarray['type_input_official_id_number'] = $get_data_surat->row()->type_input_official_id_number;

		if($get_data_surat->row()->status == 0){							

			$data = array(												
				'surat_pernyataan_id' => $get_data_surat->row()->surat_pernyataan_id,
								'phone_number' => $this->input->post('phone_number'),					
				'device_id' => $this->input->post('device_id'),							
			);     

			$this->Customer_model->update_checkin($this->input->post('character_registration'), $data);				
		}
					}
      }
  }		

		if($returnarray['count'] != FALSE){
				if($returnarray['count']->count > 0){
					$where_check_maintenance['phone_number'] = $this->input->post('phone_number');        
					$sorting['field'] = 'surat_pernyataan_id';
					  $sorting['sort'] = 'desc';
					$check_maintenance = $this->general_model->get_info("surat_pernyataan_id, valid_until", 
					"surat_pernyataan", $where_check_maintenance, $sorting, array(), array(),array(),array(),1);                
		
		if($check_maintenance != FALSE) {
			
		$where_check_character['character_registration'] = $this->input->post('character_registration');    
		$check_character = $this->general_model->get_info("is_submit", "registration", $where_check_character);                	

  		if($check_character != FALSE) {      
			  if($check_character->row()->is_submit != 1){

			$dowMap = array('G', 'H', 'I', 'J', 'K', 'L', 'A','B', 'C', 'D', 'E', 'F');		
	  
		$query = "SELECT registration_number FROM registration WHERE 
		registration_number LIKE '%".$dowMap[date('m') - 1]."%' AND YEAR(check_in) = '".date('Y')."'
		ORDER BY registration_number DESC LIMIT 1";

		$check_data = $this->db->query($query);

		$newcode = '';		
		if($check_data->num_rows() > 0 ) {      
			$newcode = $dowMap[date('m') - 1].str_pad((intval(substr($check_data->row()->registration_number,-6))+1), 6, "0", STR_PAD_LEFT);
		}else {
			$newcode = $dowMap[date('m') - 1].'000001';
		}

			$check_date = date('Y-m-d H:i:s');
			$this->db->trans_start();			

			$sql = "UPDATE registration SET check_out = '".$check_date."' WHERE 
			phone_number = '".$this->input->post('phone_number')."' AND check_out > '".
			$check_date."'";
			
			$this->db->query($sql);	

				$data = array(												
					'surat_pernyataan_id' => $check_maintenance->row()->surat_pernyataan_id,
					'phone_number' => $this->input->post('phone_number'),					
					'device_id' => $this->input->post('device_id'),
				'check_in' => $check_date,					
				'is_submit' => 1,
				'check_out' => date("Y-m-d H:i:s", strtotime('+4 hours',strtotime($check_date))),
				'registration_number' => $newcode,
				); 
				
				$this->db->where('character_registration',$this->input->post('character_registration'));
				$this->db->update('registration',$data);

				$this->db->trans_complete();	
			  }  			
  		}								
				
				$join_get_passport[0]['table'] = 'surat_pernyataan sp';
      				$join_get_passport[0]['connection'] = 'r.surat_pernyataan_id = sp.surat_pernyataan_id';
					  $join_get_passport[0]['type'] = 'left';
					  $join_get_passport[1]['table'] = 'lokasi l';
      				$join_get_passport[1]['connection'] = 'r.location_checkin = l.lokasi_id';
      				$join_get_passport[1]['type'] = 'left';
					$where_check_passport['character_registration'] = $this->input->post('character_registration');        					
					$where_check_passport['is_submit'] = 1;        					
					$check_passport = $this->general_model->get_info("r.registration_id, sp.valid_until, r.check_in, 
					l.nama_lokasi, sp.floor, r.registration_number, r.type_checkout", 
					"registration r", $where_check_passport, array(), $join_get_passport, array(),array(),array(),1);                
		
		if($check_passport != FALSE) { 							
			if(date("H", strtotime($check_passport->row()->check_in)) == "00"){
				$returnarray['checkin_time'] = date('H:i A', strtotime($check_passport->row()->check_in));
			}else{
				$returnarray['checkin_time'] = date('h:i A', strtotime($check_passport->row()->check_in));
			}					
				$returnarray['checkin_date'] = date_format(date_create($check_passport->row()->check_in),"j F Y");				
				$returnarray['registration_id'] = $check_passport->row()->registration_id;
				$returnarray['nama_lokasi'] = $check_passport->row()->nama_lokasi;				
				$returnarray['registration_number'] = $check_passport->row()->registration_number;				
				$returnarray['type_checkout'] = $check_passport->row()->type_checkout;				
				$returnarray['is_valid'] = true;	

				switch ($check_passport->row()->floor) {
					case 2:
					$returnarray['checkin_floor'] = "2FL";	
						break;
					case 3:
					$returnarray['checkin_floor'] = "3FL";	
						break;
					case 4:
					$returnarray['checkin_floor'] = "15FL";	
						break;					  
					case 5:
					$returnarray['checkin_floor'] = "16FL";	
						break;					    
					case 6:
					$returnarray['checkin_floor'] = "18FL";	
						break;					    
					case 7:
					$returnarray['checkin_floor'] = "19FL";	
						break;					    
					case 8:
					$returnarray['checkin_floor'] = "20FL";	
						break;					    
					case 9:
					$returnarray['checkin_floor'] = "21FL";	
						break;					    					
					case 11:
					$returnarray['checkin_floor'] = "23FL";	
						break;					    					
					case 13:
					$returnarray['checkin_floor'] = "25FL";	
						break;					    
					case 14:
					$returnarray['checkin_floor'] = "26FL";	
						break;					    
					case 15:
					$returnarray['checkin_floor'] = "27FL";	
						break;					    
					case 16:
					$returnarray['checkin_floor'] = "28FL";	
						break;					    
					case 17:
					$returnarray['checkin_floor'] = "29FL";	
						break;					    
					case 18:
					$returnarray['checkin_floor'] = "30FL";	
						break;					    
					case 19:
					$returnarray['checkin_floor'] = "31FL";	
						break;					    
					case 20:
					$returnarray['checkin_floor'] = "32FL";	
						break;					    
					default:
					$returnarray['checkin_floor'] = "1FL";	
				  }
		}
			}		
			}else if($this->input->post('is_submit') == 1){
				$where_get_registration['character_registration'] = $this->input->post('character_registration');    
				$count_regis = $this->general_model->get_info("count(1) as count", "registration", $where_get_registration);                
				
				if($count_regis != FALSE){
					if($count_regis->row()->count > 0){
				$join_get_passport[0]['table'] = 'surat_pernyataan sp';
      				$join_get_passport[0]['connection'] = 'r.surat_pernyataan_id = sp.surat_pernyataan_id';
					  $join_get_passport[0]['type'] = 'left';
					  $join_get_passport[1]['table'] = 'lokasi l';
      				$join_get_passport[1]['connection'] = 'r.location_checkin = l.lokasi_id';
      				$join_get_passport[1]['type'] = 'left';
					$where_check_passport['character_registration'] = $this->input->post('character_registration');        					
					$where_check_passport['is_submit'] = 1;        					
					$check_passport = $this->general_model->get_info("r.registration_id, sp.valid_until, r.check_in, 
					l.nama_lokasi, sp.floor, r.registration_number, r.type_checkout", 
					"registration r", $where_check_passport, array(), $join_get_passport, array(),array(),array(),1);                
		
		if($check_passport != FALSE) { 							
			if(date("H", strtotime($check_passport->row()->check_in)) == "00"){
				$returnarray['checkin_time'] = date('H:i A', strtotime($check_passport->row()->check_in));
			}else{
				$returnarray['checkin_time'] = date('h:i A', strtotime($check_passport->row()->check_in));
			}					
				$returnarray['checkin_date'] = date_format(date_create($check_passport->row()->check_in),"j F Y");				
				$returnarray['registration_id'] = $check_passport->row()->registration_id;
				$returnarray['nama_lokasi'] = $check_passport->row()->nama_lokasi;				
				$returnarray['registration_number'] = $check_passport->row()->registration_number;				
				$returnarray['type_checkout'] = $check_passport->row()->type_checkout;				
				$returnarray['is_valid'] = true;
				
				switch ($check_passport->row()->floor) {
					case 2:
					$returnarray['checkin_floor'] = "2FL";	
						break;
					case 3:
					$returnarray['checkin_floor'] = "3FL";	
						break;
					case 4:
					$returnarray['checkin_floor'] = "15FL";	
						break;					  
					case 5:
					$returnarray['checkin_floor'] = "16FL";	
						break;					    
					case 6:
					$returnarray['checkin_floor'] = "18FL";	
						break;					    
					case 7:
					$returnarray['checkin_floor'] = "19FL";	
						break;					    
					case 8:
					$returnarray['checkin_floor'] = "20FL";	
						break;					    
					case 9:
					$returnarray['checkin_floor'] = "21FL";	
						break;					    					
					case 11:
					$returnarray['checkin_floor'] = "23FL";	
						break;					    					
					case 13:
					$returnarray['checkin_floor'] = "25FL";	
						break;					    
					case 14:
					$returnarray['checkin_floor'] = "26FL";	
						break;					    
					case 15:
					$returnarray['checkin_floor'] = "27FL";	
						break;					    
					case 16:
					$returnarray['checkin_floor'] = "28FL";	
						break;					    
					case 17:
					$returnarray['checkin_floor'] = "29FL";	
						break;					    
					case 18:
					$returnarray['checkin_floor'] = "30FL";	
						break;					    
					case 19:
					$returnarray['checkin_floor'] = "31FL";	
						break;					    
					case 20:
					$returnarray['checkin_floor'] = "32FL";	
						break;					    
					default:
					$returnarray['checkin_floor'] = "1FL";	
				  }
		}
					}else{
						$returnarray['count'] = 0;		
					}
				}else{
					$returnarray['count'] = 0;
			}			
			}			
		}else{
			$returnarray['count'] = 0;
		}					 

		echo json_encode($returnarray);
	}

	public function add_check_in()
	{							
		date_default_timezone_set('Asia/Jakarta'); 				

		$returnarray = array();		
		$returnarray['character_checkin'] = $this->generateCharacter();		
			$data = array(												
				'device_id' => $this->input->post('device_id'),
                'phone_number' => $this->input->post('phone_number'),
				'character_registration' => $returnarray['character_checkin'],							
				'location_checkin' => $this->input->post('location_id'),											
            );
						
			$this->Customer_model->add_checkin($data);						

            echo json_encode($returnarray);
	}

	public function check_device_character()
	{						
		$where_check_device['device_id'] = $this->input->post('device_id');    
		$where_check_device['character_registration'] = $this->input->post('character_registration');    
		$check_device = $this->general_model->get_info("count(1) as count", "registration", $where_check_device);                
  
		$returnarray = array();		
		$returnarray['is_valid'] = false;    			

  if($check_device != FALSE) {        
      if($check_device->row()->count > 0){ 
		$returnarray['is_valid'] = true;    			
      }
  }		

            echo json_encode($returnarray);
	}

	public function add_registration()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();					
		$returnarray['id_surat'] = 0;
		$returnarray['error'] = "";  
		$returnarray['is_insert'] = 0;  
		$returnarray['image'] = "";		
		
		$check_phone = $this->Customer_model->get_active_phone_number($this->input->post('phone_number'));
				
		if($check_phone->num_rows() > 0 ){
			$data = array(												
				'surat_pernyataan_id' => $check_phone->row()->surat_pernyataan_id,
				'phone_number' => $this->input->post('phone_number'),
				'device_id' => $this->input->post('device_id'),								
			);     
			$this->Customer_model->update_checkout($this->input->post('registration_id'), $data);							
			$returnarray['id_surat'] = $check_phone->row()->surat_pernyataan_id;   
			$returnarray['is_insert'] = 1;  
			echo json_encode($returnarray);
		}else{
			$created_on = date('Y-m-d H:i:s');			
			$data = array(												
				'name' => $this->input->post('full_name'),
                'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email'),			
				'company' => $this->input->post('company'),
				'address' => $this->input->post('address'),				
				'suhu_tubuh' => $this->input->post('suhu_tubuh'),
				'destination_company' => $this->input->post('destination_company'),
				'floor' => $this->input->post('floor'),
				'type_id_card' => $this->input->post('type_id_card'),
				'device_id' => $this->input->post('device_id'),			
				'created_on'=> $created_on,								
				'is_fill_out_without_coercion' => $this->input->post('is_fill_out_without_coercion'),
			);

			$data["official_id_number"] = $this->input->post('official_id_number');

			if($this->input->post('official_id_number') == ""){
				$data["official_id_number"] = 0;
			}

			if($this->input->post('type_id_card') == 3 && $this->input->post('type_input_official_id_number') == 0){
				$data["type_input_official_id_number"] = 2;
			}else if($this->input->post('type_input_official_id_number') != 0){
				$data["type_input_official_id_number"] = $this->input->post('type_input_official_id_number');
			}

			if($this->input->post('status') > 0){
				$data["status"] = $this->input->post('status');
			}else{
				$returnarray['is_insert'] = 1;
			}

			$this->load->library('upload');

			$series_name = $this->input->post('registration_id').'-'.date('dmYHis');

			if(isset($_FILES['ktp_photo']) && $this->input->post('isImage') == 1){
                $logo = $_FILES['ktp_photo']['name'];   
                if($logo != null){                    
                    $config['upload_path']          = './assets/images/tmp/';
                $config['allowed_types']        = 'gif|jpg|png|tiff|pjp|pjpeg|jfif|tif|svg|bmp|jpeg|svgz|webp|ico|xbm|dib';            
                $config['max_size']             = 0;// = MB                
                $config['file_name'] 			= $series_name; 
    
                if ($this->upload->initialize($config) && ! $this->upload->do_upload('ktp_photo'))
                {   
					$returnarray['error'] = $this->upload->display_errors();
					echo json_encode($returnarray);										
					exit;
                }else{					
                    $upload_image = $this->upload->data();	
    
                    $this->load->library('Compress');
                    $compress0 = new Compress();		
            
            $compress0->file_url = getcwd().'/assets/images/tmp/'.$upload_image['file_name'];
            $compress0->new_name_image = $upload_image['file_name'];
            $compress0->quality = 60;
            $compress0->destination = base_url().'assets/images/ktp_photo/';
    
            $compress0->compress_image();
            
            if(file_exists(getcwd().'/assets/images/tmp/'.$upload_image['file_name'])){
                unlink(getcwd().'/assets/images/tmp/'.$upload_image['file_name']);						
            }		
					$data['foto_ktp'] = $upload_image['file_name'];
					$returnarray['image'] = $upload_image['file_name'];					
                }												
                }
			}else if($this->input->post('isImage') == 0 && $this->input->post('imageBase64') != ""){
                $dataImage = $this->input->post('imageBase64');
    
                list($type, $dataImage) = explode(';', $dataImage);
            list(, $dataImage)      = explode(',', $dataImage);
         
            $dataImage = base64_decode($dataImage);            

            file_put_contents('assets/images/tmp/'.$series_name.'.png', $dataImage);

        $this->load->library('Compress');
        $compress0 = new Compress();		

$compress0->file_url = getcwd().'/assets/images/tmp/'.$series_name.'.png';
$compress0->new_name_image = $series_name.'.png';
$compress0->quality = 60;
$compress0->destination = base_url().'assets/images/ktp_photo/';

$compress0->compress_image();

if(file_exists(getcwd().'/assets/images/tmp/'.$series_name.'.png')){
    unlink(getcwd().'/assets/images/tmp/'.$series_name.'.png');						
}
    
			$data['foto_ktp'] = $series_name.'.png';
			$returnarray['image'] = $series_name.'.png';			
            
            }else{
				$data['foto_ktp'] = $this->input->post('ktp_photo_last');
				$returnarray['image'] = $this->input->post('ktp_photo_last');				
			}					
			
			if($this->input->post('is_travelling') != NULL){
				$data["is_travelling"] = $this->input->post('is_travelling');
			}

			if($this->input->post('is_using_transportation') != NULL){
				$data["is_using_transportation"] = $this->input->post('is_using_transportation');
			}

			if($this->input->post('is_participate') != NULL){
				$data["is_participate_activities"] = $this->input->post('is_participate');
			}

			if($this->input->post('is_contact_patient') != NULL){
				$data["is_contact_patient"] = $this->input->post('is_contact_patient');
			}

			if($this->input->post('is_sick') != NULL){
				$data["is_sick"] = $this->input->post('is_sick');
			}

			if($this->input->post('is_agree') != NULL){
				$data["is_agree"] = $this->input->post('is_agree');
			}
						
			$returnarray['id_surat'] = $this->Customer_model->add_registration($data, $this->input->post('registration_id'));

			echo json_encode($returnarray);
		}					            
	}

	public function update_registration($surat_pernyataan_id)
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();					
		$returnarray['id_surat'] = $surat_pernyataan_id;    
		$returnarray['error'] = "";    
		
			$created_on = date('Y-m-d H:i:s');					

			$data = array(												
				'name' => $this->input->post('full_name'),
                'phone_number' => $this->input->post('phone_number'),
				'email' => $this->input->post('email'),			
				'company' => $this->input->post('company'),
				'address' => $this->input->post('address'),
				'official_id_number' => $this->input->post('official_id_number'),
				'suhu_tubuh' => $this->input->post('suhu_tubuh'),
				'destination_company' => $this->input->post('destination_company'),
				'floor' => $this->input->post('floor'),
				'device_id' => $this->input->post('device_id'),			
				'created_on'=> $created_on,								
				'is_fill_out_without_coercion' => $this->input->post('is_fill_out_without_coercion'),
				'status'=> 0,
			);

			$this->load->library('upload');

			if(isset($_FILES['ktp_photo'])){
                $logo = $_FILES['ktp_photo']['name'];   
                if($logo != null){
                    $series_name = $this->input->post('registration_id').'-'.date('dmYHis');
                    $config['upload_path']          = './assets/images/tmp/';
                $config['allowed_types']        = 'gif|jpg|png|tiff|pjp|pjpeg|jfif|tif|svg|bmp|jpeg|svgz|webp|ico|xbm|dib';            
                $config['max_size']             = 0;// = MB                
                $config['file_name'] 			= $series_name; 
    
                if ($this->upload->initialize($config) && ! $this->upload->do_upload('ktp_photo'))
                {   
                    $returnarray['error'] = $this->upload->display_errors();
					echo json_encode($returnarray);										
					exit;
                }else{					
                    $upload_image = $this->upload->data();	
    
                    $this->load->library('Compress');
                    $compress0 = new Compress();		
            
            $compress0->file_url = getcwd().'/assets/images/tmp/'.$upload_image['file_name'];
            $compress0->new_name_image = $upload_image['file_name'];
            $compress0->quality = 60;
            $compress0->destination = base_url().'assets/images/ktp_photo/';
    
            $compress0->compress_image();
            
            if(file_exists(getcwd().'/assets/images/tmp/'.$upload_image['file_name'])){
                unlink(getcwd().'/assets/images/tmp/'.$upload_image['file_name']);						
            }		
                    $data['foto_ktp'] = $upload_image['file_name'];
                }												
                }
			}else{
				$data['foto_ktp'] = $this->input->post('ktp_photo_last');
			}
			
			$this->db->where('surat_pernyataan_id',$surat_pernyataan_id);
			$this->db->update('surat_pernyataan',$data);								

            echo json_encode($returnarray);
	}

	public function add_checkout()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$where_registration['registration_id'] = $this->input->post("registration_id");        										

		$get_registration = $this->general_model->get_info("type_checkout, check_out, surat_pernyataan_id", "registration", $where_registration); 

		$returnarray = array();				
		$returnarray['checkout_date'] = "";
		$returnarray['checkout_time'] = "";
		$returnarray['is_valid'] = false;
		$returnarray['is_double'] = false;
		$returnarray['double_checkout_time'] = "";

		if($get_registration != FALSE) {
			if($get_registration->row()->type_checkout <= 1){
				$checkout_date = date('Y-m-d H:i:s');    

				$returnarray['checkout_date'] = date_format(date_create($checkout_date),"j F Y");		
			if(date("H", strtotime($checkout_date)) == "00"){
				$returnarray['checkout_time'] = date('H:i A', strtotime($checkout_date));
			}else{
				$returnarray['checkout_time'] = date('h:i A', strtotime($checkout_date));
			}

			$params = array(
				'check_out' => $checkout_date,
				'type_checkout' => 1,
				'is_checkout' => 1,
			);

			$params_surat_pernyataan = array(
				'valid_until' => $checkout_date,				
			);

			$this->db->trans_start();			

			$this->db->where('registration_id',$this->input->post("registration_id"));
			$this->db->update('registration',$params);	
			
			$this->db->where('surat_pernyataan_id',$get_registration->row()->surat_pernyataan_id);
			$this->db->update('surat_pernyataan',$params_surat_pernyataan);	
			
			$this->db->trans_complete();
			
			$returnarray['is_valid'] = true;
			}else{			  
				$returnarray['double_checkout_time'] = $get_registration->row()->check_out;
				$returnarray['is_double'] = true;
			}   			
		}								        								

            echo json_encode($returnarray);
	}

	public function generateCharacter() { 
        $n=14; 
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
        $randomString = ''; 
      
        for ($i = 0; $i < $n; $i++) { 
            $index = rand(0, strlen($characters) - 1); 
            $randomString .= $characters[$index]; 
        } 
      
        return $randomString; 
	}
	
	public function get_surat_phone()
	{					
		$returnarray = array();		
		$returnarray['full_name'] = "";    
		$returnarray['phone_number'] = "";    
		$returnarray['email'] = "";    
		$returnarray['count_surat'] = 0; 
		$returnarray['company'] = "";
		$returnarray['address'] = "";
		$returnarray['official_id_number'] = "";
		$returnarray['suhu_tubuh'] = "";
		$returnarray['destination_company'] = "";
		$returnarray['floor'] = "0";
		$returnarray['ktp_photo'] = "";
		$returnarray['type_id_card'] = "0";
		$returnarray['type_input_official_id_number'] = "0";

		$where_check_surat_device['phone_number'] = $this->input->post('phone_number');    
		$exception['field'] = 'status';
      	$exception['value'] = 3;
			$check_surat_device = $this->general_model->get_info("count(1) as count", "surat_pernyataan", $where_check_surat_device,array(),array(),$exception);
  
  if($check_surat_device != FALSE) {        
      if($check_surat_device->row()->count > 0){ 
		$returnarray['count_surat'] = $check_surat_device->row()->count;		
					$sorting_surat_device['field'] = 'created_on';
					  $sorting_surat_device['sort'] = 'desc';
					$get_data_surat = $this->general_model->get_info("name, email, phone_number, company, 
					address, official_id_number, destination_company, floor, foto_ktp, type_id_card, suhu_tubuh, 
					type_input_official_id_number", 
					"surat_pernyataan", $where_check_surat_device, $sorting_surat_device, array(), $exception,array(),array(),1);                
					if($get_data_surat != FALSE) {
						$returnarray['full_name'] = $get_data_surat->row()->name;
		$returnarray['phone_number'] = $get_data_surat->row()->phone_number;
		$returnarray['email'] = $get_data_surat->row()->email;
		$returnarray['company'] = $get_data_surat->row()->company;
		$returnarray['address'] = $get_data_surat->row()->address;
		$returnarray['official_id_number'] = $get_data_surat->row()->official_id_number;
		$returnarray['destination_company'] = $get_data_surat->row()->destination_company;
		$returnarray['floor'] = $get_data_surat->row()->floor;
		$returnarray['ktp_photo'] = $get_data_surat->row()->foto_ktp;
		$returnarray['type_id_card'] = $get_data_surat->row()->type_id_card;
		$returnarray['suhu_tubuh'] = $get_data_surat->row()->suhu_tubuh;
		$returnarray['type_input_official_id_number'] = $get_data_surat->row()->type_input_official_id_number;
					}
      }
  }

  echo json_encode($returnarray);
	}
	
	public function get_surat_pernyataan()
	{				
		date_default_timezone_set('Asia/Jakarta'); 

		$datetime = date('Y-m-d');
		$day_num = date('w', strtotime($datetime));

		if($day_num == 0){
			$day_num = 7;
		}

		$returnarray = array();	
		$returnarray['full_name'] = "";
		$returnarray['phone_number'] = "";
		$returnarray['email'] = "";
		$returnarray['status_surat'] = 2;
		$returnarray['surat_pernyataan_id'] = 0;
		$returnarray['valid_until_date'] = "";    
		$returnarray['valid_until_time'] = "";      
		$returnarray['registration_id'] = 0;    
		$returnarray['nama_lokasi'] = "";    
		$returnarray['checkin_date'] = "";    
		$returnarray['registration_number'] = "";  
		$returnarray['checkin_time'] = "";    
		$returnarray['checkin_floor'] = "";  
		$returnarray['background_declaration_form'] = "";
		$returnarray['background_safe_entry_pass'] = "";
		$returnarray['company'] = "";
		$returnarray['address'] = "";
		$returnarray['official_id_number'] = "";
		$returnarray['suhu_tubuh'] = "";
		$returnarray['destination_company'] = "";
		$returnarray['floor'] = "0";
		$returnarray['ktp_photo'] = "";
		$returnarray['type_id_card'] = "0";
		$returnarray['reason_rejection'] = "";
		$returnarray['is_travelling'] = "";
		$returnarray['is_using_transportation'] = "";
		$returnarray['is_participate_activities'] = "";
		$returnarray['is_contact_patient'] = "";
		$returnarray['is_sick'] = "";
		$returnarray['is_agree'] = "";

		$where_get_background['day'] = $day_num;        										

		$get_background = $this->general_model->get_info("background_color_declaration_form,
		background_color_safe_entry_pass", "background_surat", $where_get_background); 

		if($get_background != FALSE) {               
			$returnarray['background_declaration_form'] = $get_background->row()->background_color_declaration_form;
			$returnarray['background_safe_entry_pass'] = $get_background->row()->background_color_safe_entry_pass;
		}

			$join_maintenance[0]['table'] = 'surat_pernyataan sp';
      				$join_maintenance[0]['connection'] = 'r.surat_pernyataan_id = sp.surat_pernyataan_id';
					  $join_maintenance[0]['type'] = 'left';
					  $join_maintenance[1]['table'] = 'lokasi l';
      				$join_maintenance[1]['connection'] = 'r.location_checkin = l.lokasi_id';
      				$join_maintenance[1]['type'] = 'left';
					$where_check_maintenance['r.registration_id'] = $this->input->post('registration_id');        										
					$where_check_maintenance['r.surat_pernyataan_id'] = $this->input->post('id');        										

			$check_maintenance = $this->general_model->get_info("r.registration_id, sp.valid_until, r.check_in, 
					l.nama_lokasi, sp.surat_pernyataan_id, sp.name, sp.email, sp.phone_number, sp.status, sp.company, 
					sp.address, sp.official_id_number, sp.destination_company, sp.floor, sp.foto_ktp, sp.type_id_card, 
					sp.suhu_tubuh, r.registration_number, sp.reason_rejection, sp.is_travelling, sp.is_using_transportation, 
					sp.is_participate_activities, sp.is_contact_patient, sp.is_sick, sp.is_agree", 
					"registration r", $where_check_maintenance, array(), $join_maintenance, array(),array(),array(),1);                
		
		if($check_maintenance != FALSE) { 			
			if($check_maintenance->row()->status == 1){
				if(date("H", strtotime($check_maintenance->row()->check_in)) == "00"){
					$returnarray['checkin_time'] = date('H:i A', strtotime($check_maintenance->row()->check_in));
				}else{
					$returnarray['checkin_time'] = date('h:i A', strtotime($check_maintenance->row()->check_in));
				}					
					$returnarray['checkin_date'] = date_format(date_create($check_maintenance->row()->check_in),"j F Y");				
					$returnarray['registration_id'] = $check_maintenance->row()->registration_id;
					$returnarray['nama_lokasi'] = $check_maintenance->row()->nama_lokasi;												
					$returnarray['registration_number'] = $check_maintenance->row()->registration_number;												

					switch ($check_maintenance->row()->floor) {
						case 2:
						$returnarray['checkin_floor'] = "2FL";	
							break;
						case 3:
						$returnarray['checkin_floor'] = "3FL";	
							break;
						case 4:
						$returnarray['checkin_floor'] = "15FL";	
							break;					  
						case 5:
						$returnarray['checkin_floor'] = "16FL";	
							break;					    
						case 6:
						$returnarray['checkin_floor'] = "18FL";	
							break;					    
						case 7:
						$returnarray['checkin_floor'] = "19FL";	
							break;					    
						case 8:
						$returnarray['checkin_floor'] = "20FL";	
							break;					    
						case 9:
						$returnarray['checkin_floor'] = "21FL";	
							break;					    						
						case 11:
						$returnarray['checkin_floor'] = "23FL";	
							break;					    						
						case 13:
						$returnarray['checkin_floor'] = "25FL";	
							break;					    
						case 14:
						$returnarray['checkin_floor'] = "26FL";	
							break;					    
						case 15:
						$returnarray['checkin_floor'] = "27FL";	
							break;					    
						case 16:
						$returnarray['checkin_floor'] = "28FL";	
							break;					    
						case 17:
						$returnarray['checkin_floor'] = "29FL";	
							break;					    
						case 18:
						$returnarray['checkin_floor'] = "30FL";	
							break;					    
						case 19:
						$returnarray['checkin_floor'] = "31FL";	
							break;					    
						case 20:
						$returnarray['checkin_floor'] = "32FL";	
							break;					    
						default:
						$returnarray['checkin_floor'] = "1FL";	
					  }
			}			
				
			$returnarray['full_name'] = $check_maintenance->row()->name;
			$returnarray['phone_number'] = $check_maintenance->row()->phone_number;
			$returnarray['email'] = $check_maintenance->row()->email;
			$returnarray['status_surat'] = $check_maintenance->row()->status;
			$returnarray['surat_pernyataan_id'] = $check_maintenance->row()->surat_pernyataan_id;
			$returnarray['company'] = $check_maintenance->row()->company;
			$returnarray['address'] = $check_maintenance->row()->address;
			$returnarray['official_id_number'] = $check_maintenance->row()->official_id_number;
			$returnarray['suhu_tubuh'] = $check_maintenance->row()->suhu_tubuh;
			$returnarray['destination_company'] = $check_maintenance->row()->destination_company;
			$returnarray['floor'] = $check_maintenance->row()->floor;
			$returnarray['ktp_photo'] = $check_maintenance->row()->foto_ktp;
			$returnarray['type_id_card'] = $check_maintenance->row()->type_id_card;
			$returnarray['reason_rejection'] = $check_maintenance->row()->reason_rejection;
			$returnarray['is_travelling'] = $check_maintenance->row()->is_travelling;
			$returnarray['is_using_transportation'] = $check_maintenance->row()->is_using_transportation;
			$returnarray['is_participate_activities'] = $check_maintenance->row()->is_participate_activities;
			$returnarray['is_contact_patient'] = $check_maintenance->row()->is_contact_patient;
			$returnarray['is_sick'] = $check_maintenance->row()->is_sick;
			$returnarray['is_agree'] = $check_maintenance->row()->is_agree;
		}			
		
		echo json_encode($returnarray);
	}

	public function check_phone_checkout()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();		
		$returnarray['is_valid'] = false; 
		$returnarray['checkout_date'] = "";
		$returnarray['checkout_time'] = "";

		$where_check_checkin['phone_number'] = $this->input->post('phone_number');        
		$where_check_checkin['is_submit'] = 1;
					$sorting_checkin['field'] = 'check_in';
					  $sorting_checkin['sort'] = 'desc';
					$check_checkin = $this->general_model->get_info("registration_id, surat_pernyataan_id", 
					"registration", $where_check_checkin, $sorting_checkin, array(), array(),array(),array(),1);                
					if($check_checkin != FALSE) {
						$checkout_date = date('Y-m-d H:i:s');    
		$returnarray['checkout_date'] = date_format(date_create($checkout_date),"j F Y");		
			if(date("H", strtotime($checkout_date)) == "00"){
				$returnarray['checkout_time'] = date('H:i A', strtotime($checkout_date));
			}else{
				$returnarray['checkout_time'] = date('h:i A', strtotime($checkout_date));
			}						

						$data_checkout = array(																			
						'check_out' => $checkout_date,
						'type_checkout' => 3,
						'is_checkout' => 1,
						);     

						$data_surat_pernyataan = array(
							'valid_until' => $checkout_date,				
						);
			
						$this->db->trans_start();			
			
						$this->db->where('registration_id',$check_checkin->row()->registration_id);
						$this->db->update('registration',$data_checkout);	
						
						$this->db->where('surat_pernyataan_id',$check_checkin->row()->surat_pernyataan_id);
						$this->db->update('surat_pernyataan',$data_surat_pernyataan);	
						
						$this->db->trans_complete();
						
						$returnarray['is_valid'] = true;
					}

  echo json_encode($returnarray);
	}

	public function check_device_checkout()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();		
		$returnarray['is_valid'] = false; 
		$returnarray['checkout_date'] = "";
		$returnarray['checkout_time'] = "";   		

		$where_check_checkin['device_id'] = $this->input->post('device_id');        
		$where_check_checkin['is_submit'] = 1;
					$sorting_checkin['field'] = 'check_in';
					  $sorting_checkin['sort'] = 'desc';
					$check_checkin = $this->general_model->get_info("registration_id, surat_pernyataan_id", 
					"registration", $where_check_checkin, $sorting_checkin, array(), array(),array(),array(),1);                
					if($check_checkin != FALSE) {	
						$checkout_date = date('Y-m-d H:i:s');    
		$returnarray['checkout_date'] = date_format(date_create($checkout_date),"j F Y");		
			if(date("H", strtotime($checkout_date)) == "00"){
				$returnarray['checkout_time'] = date('H:i A', strtotime($checkout_date));
			}else{
				$returnarray['checkout_time'] = date('h:i A', strtotime($checkout_date));
			}					

						$data_checkout = array(																			
						'check_out' => $checkout_date,
						'type_checkout' => 3,
						'is_checkout' => 1,
						);     

						$data_surat_pernyataan = array(
							'valid_until' => $checkout_date,				
						);
			
						$this->db->trans_start();			
			
						$this->db->where('registration_id',$check_checkin->row()->registration_id);
						$this->db->update('registration',$data_checkout);	
						
						$this->db->where('surat_pernyataan_id',$check_checkin->row()->surat_pernyataan_id);
						$this->db->update('surat_pernyataan',$data_surat_pernyataan);	
						
						$this->db->trans_complete();
						
						$returnarray['is_valid'] = true;
					}

  echo json_encode($returnarray);
	}

	public function checkout_location()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();		
		$returnarray['checkout_date'] = "";
		$returnarray['checkout_time'] = "";
		$returnarray['is_valid'] = false;				
		$returnarray['success'] = true; 				

		if($this->input->post('phone_number') != "" || $this->input->post('device_id') != ""){

			$check_data = $this->db->query("SELECT type_checkout, check_out, surat_pernyataan_id FROM registration
		WHERE (phone_number = '".$this->input->post('phone_number')."' || 
		device_id = '".$this->input->post('device_id')."') AND 
		registration_id = ".$this->input->post('registration_id')." AND is_submit = 1 
		AND check_out != ''");						
		
		if($check_data->num_rows() > 0){
			$returnarray['is_valid'] = true;						
			if($check_data->row()->type_checkout < 2){				

				$checkout_date = date('Y-m-d H:i:s'); 
				
				$returnarray['checkout_date'] = date_format(date_create($checkout_date),"j F Y");		
				if(date("H", strtotime($checkout_date)) == "00"){
					$returnarray['checkout_time'] = date('H:i A', strtotime($checkout_date));
				}else{
					$returnarray['checkout_time'] = date('h:i A', strtotime($checkout_date));
				}	

					$data_checkout = array(																			
					'check_out' => $checkout_date,
					'type_checkout' => 2,
					'is_checkout' => 1,
					);     

					$data_surat_pernyataan = array(
						'valid_until' => $checkout_date,				
					);
		
					$this->db->trans_start();			
		
					$this->db->where('registration_id',$this->input->post('registration_id'));
					$this->db->update('registration',$data_checkout);	
					
					$this->db->where('surat_pernyataan_id',$check_data->row()->surat_pernyataan_id);
					$this->db->update('surat_pernyataan',$data_surat_pernyataan);	
					
					$this->db->trans_complete();
										
			}else{				
				$returnarray['checkout_date'] = date_format(date_create($check_data->row()->check_out),"j F Y");		
				if(date("H", strtotime($check_data->row()->check_out)) == "00"){
					$returnarray['checkout_time'] = date('H:i A', strtotime($check_data->row()->check_out));
				}else{
					$returnarray['checkout_time'] = date('h:i A', strtotime($check_data->row()->check_out));
				}	
			}				
		}        
		}		

  echo json_encode($returnarray);
	}

	public function check_lat_long()
	{					
		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();		
		$returnarray['is_valid'] = false; 		

		$status = $this->Customer_model->check_lat_long($this->input->post('latitude'), 
		$this->input->post('longitude'));		

		if($status->distance == 1){
			$returnarray['is_valid'] = true; 		
		}

  echo json_encode($returnarray);
	}

	public function get_official_id_number()
	{								

		putenv('TESSDATA_PREFIX=/usr/local/tesseract-5.0/share/tessdata');	

		date_default_timezone_set('Asia/Jakarta'); 

		$returnarray = array();		
		$returnarray['is_insert'] = 0;  		

		$filePath = getcwd().'/assets/images/ktp_photo/'.$this->input->post('image');

		$fileNameTesseract = date('dmYHis');				
		
		$cmd = ' "'.$filePath.'" -density 300 -bordercolor White -border 10x10 -brightness-contrast 40x10 -trim -resize 60% -colorspace GRAY "'.getcwd().'/assets/images/tmp/KTP-'.$fileNameTesseract.'.png"';                		    		
		
		$binary = 'convert';		
		// $binary = 'gm convert';		

		$retval = null;
		$output = array();
		$cmd = $binary . ' ' .trim($cmd, ' '). ' 2>&1';
		@exec($cmd, $output, $retval);				

		if ($retval === 0)
		{									

			$ocr = new TesseractOCR();
$ocr->image(getcwd().'/assets/images/tmp/KTP-'.$fileNameTesseract.'.png');
if ($this->input->post('type_id_card') == 1) {
	$ocr->lang('ocr');
}else{
	$ocr->lang('eng2');
}
// $ocr->lang('eng');
$ocr->whitelist(range(0,9));	

// $returnarray['official_id_number'] = $ocr->run();
// echo json_encode($returnarray);
// exit;

	$pieces = preg_split('/\s+/', $ocr->run());    		
    
    foreach($pieces as $data){
	if ((strlen($data) == 16 || strlen($data) == 17 && $this->input->post('type_id_card') == 1) ||
	((strlen($data) >= 12 && strlen($data) <= 16) && $this->input->post('type_id_card') == 2)) {            					
		$newNumber = ltrim($data, '0');		
		$update['official_id_number'] = substr($newNumber,0,6);				
		$update['status'] = 0;
		$update['type_input_official_id_number'] = 1;
		
		$this->db->where('surat_pernyataan_id',$this->input->post('id_surat'));
		$this->db->update('surat_pernyataan',$update);
		$returnarray['is_insert'] = 1;
		break;
      }    
}	

if(file_exists(getcwd().'/assets/images/tmp/KTP-'.$fileNameTesseract.'.png')){
	unlink(getcwd().'/assets/images/tmp/KTP-'.$fileNameTesseract.'.png');						
}		
}

  echo json_encode($returnarray);
	}

	public function update_official_id_number()
	{									
		$returnarray = array();		
		$returnarray['success'] = true;  		

		$update['official_id_number'] = $this->input->post('official_id_number');		
		$update['status'] = 0;
		$update['type_input_official_id_number'] = 2;
		
		$this->db->where('surat_pernyataan_id',$this->input->post('id_surat'));
		$this->db->update('surat_pernyataan',$update);

  echo json_encode($returnarray);
	}

	


    
    public function checkout()
	{					
		$this->load->view('check_out_entry');
	}				

	public function test_geolocation()
	{					
		$this->load->view('test_geolocation');
	}				
	
	public function declaration_form()
	{					
		$this->load->view('declaration_form');
    }				
    
    public function checkout_success()
	{							
		$this->load->view('check_out_success');
	}				

	public function safe_entry_pass()
	{					
		$this->load->view('safe_entry_pass');
	}			

	public function waiting_screen()
	{					
		$this->load->view('waiting_screen');
	}			
}
