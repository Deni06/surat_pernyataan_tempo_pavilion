<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class My_task extends CI_Controller{
    function __construct()
    {
        parent::__construct();              
        $this->load->model('general_model');        
    } 

    /*
     * Listing of users
     */
    function index()
    {        
        $count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){
            $this->session->set_flashdata('error','Invalid Serial Number');    
            redirect('login');  
        }

        if($this->session->userdata('is_login') !=  true || $this->user_library->show_my_task_access() != 1)
        {
            $this->session->set_flashdata('error','You have no access to that page.');
            redirect('login');  
        }          

        $this->load->view('backend/my_task/master_my_task');
    }
    
    function get_data(){                         
    
    $location_my_task_data_access = $this->user_library->show_location_my_task_access();
    $location_my_task_access = array();
    $subscription = array();

    if($this->session->userdata('user_id') == 1){        
        $query = "SELECT sp.*, (SELECT r.location_checkin FROM registration r WHERE r.surat_pernyataan_id = sp.surat_pernyataan_id 
        ORDER BY r.check_in DESC LIMIT 1) as location from surat_pernyataan sp WHERE sp.status = 0";

        $subscription = $this->db->query($query)->result_array();    
    }else if($location_my_task_data_access != null && $location_my_task_data_access != ""){
        $location_my_task_access = preg_split('@;@', $location_my_task_data_access, NULL, PREG_SPLIT_NO_EMPTY);

        $query = "SELECT sp.*, (SELECT r.location_checkin FROM registration r WHERE r.surat_pernyataan_id = sp.surat_pernyataan_id 
        ORDER BY r.check_in DESC LIMIT 1) as location from surat_pernyataan sp WHERE sp.status = 0 HAVING location IN 
        (".implode(', ', $location_my_task_access).")";

        $subscription = $this->db->query($query)->result_array();    
    }    
                
$callback = array(        
    "iTotalRecords" => count($subscription),    
    'iTotalDisplayRecords'=>count($subscription),    
    'data'=>$subscription
);
header('Content-Type: application/json');
echo json_encode($callback); // Convert array $callback ke json

    }

    function count_my_task(){       
        $location_my_task_data_access = $this->user_library->show_location_my_task_access();
        $location_my_task_access = array();

        $returnarray['count'] = 0;
    
        if($this->session->userdata('user_id') == 1){        
            $query = "SELECT (SELECT r.location_checkin FROM registration r WHERE r.surat_pernyataan_id = sp.surat_pernyataan_id 
        ORDER BY r.check_in DESC LIMIT 1) as location from surat_pernyataan sp WHERE sp.status = 0";

            $returnarray['count'] = $this->db->query($query)->num_rows();

        }else if($location_my_task_data_access != null && $location_my_task_data_access != ""){
            $location_my_task_access = preg_split('@;@', $location_my_task_data_access, NULL, PREG_SPLIT_NO_EMPTY);

            $query = "SELECT (SELECT r.location_checkin FROM registration r WHERE r.surat_pernyataan_id = sp.surat_pernyataan_id 
        ORDER BY r.check_in DESC LIMIT 1) as location from surat_pernyataan sp WHERE sp.status = 0 HAVING location IN 
        (".implode(', ', $location_my_task_access).")";

            $returnarray['count'] = $this->db->query($query)->num_rows();
        }        
                
        echo json_encode($returnarray);
    }

	public function change_status_surat($surat_pernyataan_id)
	{	
        $count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){
            $this->session->set_flashdata('error','Invalid Serial Number');    
            redirect('login');  
        }

        if($this->session->userdata('is_login') !=  true || $this->user_library->show_my_task_access() != 1)
        {
            $this->session->set_flashdata('error','You have no access to that page.');
            redirect('login');  
        }  

		date_default_timezone_set('Asia/Jakarta');
		$created_on = date('Y-m-d H:i:s');
        $valid_until = date("Y-m-d 18:00:00", strtotime('+0 days',strtotime($created_on)));
        $check_out = date("Y-m-d H:i:s", strtotime('+4 hours',strtotime($created_on)));

		$where_check_surat_device['surat_pernyataan_id'] = $surat_pernyataan_id;    
        $data['me'] = $this->general_model->get_info("status, type_input_official_id_number, 
        official_id_number", "surat_pernyataan", 
        $where_check_surat_device);               
		
		if($data['me'] != FALSE) { 			
			if($data['me']->row()->status != 0){
				$this->session->set_flashdata('error','This Declaration Form has been reviewed by another user');                                
                redirect('admin/my_task/');
			}else if(isset($_POST) && count($_POST) > 0){
                $where_list_registration['surat_pernyataan_id'] = $surat_pernyataan_id;    
                $where_list_registration['is_submit'] = 0;    
		        $list_registration = $this->general_model->get_info("registration_id", "registration", 
                $where_list_registration);   

                $dowMap = array('G', 'H', 'I', 'J', 'K', 'L', 'A','B', 'C', 'D', 'E', 'F');		
	  
		$query = "SELECT registration_number FROM registration WHERE 
		registration_number LIKE '%".$dowMap[date('m') - 1]."%' AND YEAR(check_in) = '".date('Y')."'
		ORDER BY registration_number DESC LIMIT 1";

		$check_data = $this->db->query($query);		

                $reason_rejection = "";

                if($this->input->post('status') != 1){
                    $reason_rejection = "Mohon untuk menghubungi resepsionis kami untuk akses masuk/Please contact our receptionist for the entrance pass";
                }

				$this->db->trans_start();
				$update = array(															
					'status' => $this->input->post('status'),
					'change_status_by' => $this->session->userdata('user_id'),
					'change_status_on' => $created_on,
                    'valid_until' => $valid_until,
                    'reason_rejection' => $reason_rejection,
                );
                
                if($this->input->post('status') == 1 && $data['me']->row()->type_input_official_id_number == 1
                && $data['me']->row()->official_id_number != $this->input->post('official_id_number_corrected')){
                    $update["official_id_number"] = $this->input->post('official_id_number_corrected');
                    $update["type_input_official_id_number"] = 3;
                }

				$this->db->where('surat_pernyataan_id',$surat_pernyataan_id);
				$this->db->update('surat_pernyataan',$update);        
                
                if($this->input->post('status') == 1 && $list_registration != FALSE){
                    for ($i=1; $i <= count($list_registration->result()); $i++) { 
                        $newcode = '';		
		if($check_data->num_rows() > 0 ) {      
			$newcode = $dowMap[date('m') - 1].str_pad((intval(substr($check_data->row()->registration_number,-6))+$i), 6, "0", STR_PAD_LEFT);
		}else {
			$newcode = $dowMap[date('m') - 1].'00000'.$i;
        }    
        
                        $data_registration = array(															
                            'is_submit' => 1,					
                            'check_in' => $created_on,					
                            'check_out' => $check_out,	
                            'registration_number' => $newcode,
                        );
                        
                        $where_registration['registration_id'] = $list_registration->result()[$i-1]->registration_id;                        
        
                        $this->db->update('registration',$data_registration, $where_registration);           
                    }                    
                }				
				
                $this->db->trans_complete();

                $status_name = "Approve";
                if($this->input->post('status') == 2){
                    $status_name = "Decline";
                }
                
                $this->session->set_flashdata('success', $status_name.' Declaration Form Success');                
                redirect('admin/my_task');
			}else
            {                        
                $this->load->view('backend/my_task/view_my_task',$data);
            }									
		}else{
			$this->session->set_flashdata('error','Declaration Form doesnt exist');    
            redirect('admin/my_task');
		}													            
	}

    public function View($id){        
        $count = $this->db->query("SELECT COUNT(1) as count FROM company
		WHERE LOWER(company_name) = LOWER('PT. Bina Mulia Manunggal') AND 
		LOWER(company_address) = LOWER('Jl.HR Rasuna Said Kav 10-11')")->row();						
        
        if($count->count <= 0){
            $this->session->set_flashdata('error','Invalid Serial Number');    
            redirect('login');  
        }

        if($this->session->userdata('is_login') !=  true || $this->user_library->show_my_task_access() != 1)
        {
            $this->session->set_flashdata('error','You have no access to that page.');
            redirect('login');  
        } 
        
        $location_my_task_data_access = $this->user_library->show_location_my_task_access();
    $location_my_task_access = array();    

    if($location_my_task_data_access != null && $location_my_task_data_access != ""){
        $location_my_task_access = preg_split('@;@', $location_my_task_data_access, NULL, PREG_SPLIT_NO_EMPTY);
    }

    $query = "SELECT sp.*, (SELECT l.nama_lokasi FROM registration r LEFT JOIN lokasi l 
    on r.location_checkin = l.lokasi_id WHERE r.surat_pernyataan_id = sp.surat_pernyataan_id 
    ORDER BY r.check_in DESC LIMIT 1) as nama_lokasi,
    (SELECT r.location_checkin FROM registration r WHERE r.surat_pernyataan_id = sp.surat_pernyataan_id 
    ORDER BY r.check_in DESC LIMIT 1) as lokasi_id, mk.status as status_mark
     from surat_pernyataan sp LEFT JOIN mark_customer mk on sp.phone_number = mk.phone_number 
     WHERE sp.surat_pernyataan_id = ".$id;

        $data['me'] = $this->db->query($query);

        if($data['me'] != FALSE) {

            if(!in_array($data['me']->row()->lokasi_id, $location_my_task_access) && $this->session->userdata('user_id') != 1){
                $this->session->set_flashdata('error','You have no access to that Declaration Form.');    
                return redirect('admin/my_task');
            }

            $data["checkin_date"] = "";
            $data["checkin_time"] = "";

            $check_data = $this->db->query("SELECT is_checkout, check_in FROM registration
		WHERE (phone_number = '".$data['me']->row()->phone_number."' || 
		device_id = '".$data['me']->row()->device_id."')  AND is_submit = 1 
		AND check_out != '' ORDER BY check_in DESC");						
                
		if($check_data->num_rows() > 0){            
			if($check_data->row()->is_checkout == 0){
                $data['checkin_date'] = date_format(date_create($check_data->row()->check_in),"j F Y");		
				$data['checkin_time'] = date_format(date_create($check_data->row()->check_in),"H:i:s");
			}		
		} 
            $this->load->view('backend/my_task/view_my_task',$data);
        }else{
            $this->session->set_flashdata('error','Declaration Form doesnt exist');    
            redirect('admin/my_task');
        }		
    }    
    
}
