<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Recap_Visitor extends CI_Controller{
    function __construct()
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

        $this->load->model('general_model');        
    } 

    /*
     * Listing of users
     */
    function index()
    {
        $this->user_library->checking_page_access('recap_visitor',"recap_visitor","view");

        $query = "SELECT sp.*, r2.check_in as last_checkin, r2.check_out as last_checkout, 
        mk.status as status_mark FROM surat_pernyataan sp INNER JOIN
        (SELECT max(surat_pernyataan_id) max_id FROM surat_pernyataan WHERE status != 3 GROUP BY phone_number
        ) sp2 ON sp.surat_pernyataan_id = sp2.max_id LEFT JOIN mark_customer mk on 
        sp.phone_number = mk.phone_number LEFT JOIN
        (SELECT max(registration_id) as max_registration_id, phone_number, check_in, check_out, 
        surat_pernyataan_id FROM registration WHERE is_submit = 1 GROUP BY surat_pernyataan_id
        ) r2 ON sp.phone_number = r2.phone_number";

        $data['surat'] = $this->db->query($query);         
        $this->load->view('backend/recap_visitor/master_recap_visitor',$data);
    }            

    public function view_history($phone_number){
        $this->user_library->checking_page_access('recap_visitor',"recap_visitor","view");

        $query = "SELECT sp.*, mk.status as status_mark FROM surat_pernyataan sp INNER JOIN
        (SELECT max(surat_pernyataan_id) max_id FROM surat_pernyataan WHERE 
        phone_number = '+".$phone_number."') sp2 ON sp.surat_pernyataan_id = sp2.max_id 
        LEFT JOIN mark_customer mk on 
        sp.phone_number = mk.phone_number";        

        $data['surat'] = $this->db->query($query);    
        
        $where_history['r.phone_number'] = "+".$phone_number;    		
        $where_history['r.is_submit'] = 1;    		
        $join_history[0]['table'] = 'surat_pernyataan sp';
      	$join_history[0]['connection'] = 'r.surat_pernyataan_id = sp.surat_pernyataan_id';
        $join_history[0]['type'] = 'left';
        
        $data['list_history'] = $this->general_model->get_info("sp.floor,sp.destination_company,
        r.check_in, r.check_out, r.type_checkout, sp.surat_pernyataan_id", 
        "registration r", $where_history, array(), $join_history);                	

        $data['phone_number'] = $phone_number;
        
        $this->load->view('backend/recap_visitor/master_visitor_history',$data);
    }    

    public function view_declaration_form($id, $phone_number){
        $this->user_library->checking_page_access('recap_visitor',"recap_visitor","view");
        
        $where_surat['surat_pernyataan_id'] = $id;        										
        $data['me'] = $this->general_model->get_info("*", "surat_pernyataan", $where_surat);  
        $data['phone_number'] = $phone_number;        
        if($data['me'] != FALSE) { 
            $this->load->view('backend/recap_visitor/view_recap_visitor',$data);
        }else{
            $this->session->set_flashdata('error','Declaration Form doesnt exist');    
            redirect('admin/recap_visitor/view_history/'.$phone_number);
        }		
    }
    
    public function change_mark()
{
    $where_check_phone_number['phone_number'] = $this->input->post('phone_number');    
    $count_check_phone_number = $this->general_model->get_info("count(1) as count", "surat_pernyataan", $where_check_phone_number);                

    $returnarray = array();
		$returnarray['status'] = true;
		$returnarray['error'] = '';				
		$returnarray['error_text'] = '';
		$returnarray['success_text'] = '';

    if($count_check_phone_number->row()->count <= 0){
        $returnarray['error'] = "Failed!";
			$returnarray['error_text'] = 'Visitor with Phone Number '.$this->input->post('phone_number').' doesnt exist';
			echo json_encode($returnarray);	
			exit;		
    }

    if($this->input->post('status') == 0){
        $where_check_status['phone_number'] = $this->input->post('phone_number');    
    $count_check_status = $this->general_model->get_info("count(1) as count", "mark_customer", $where_check_status);                

    if($count_check_status->row()->count <= 0){
        $returnarray['error'] = "Failed!";
			$returnarray['error_text'] = 'The Visitor has been Unmarked by another user';
			echo json_encode($returnarray);	
			exit;		
    }

    $this->db->delete('mark_customer',array('phone_number'=>$this->input->post('phone_number')));

    }else{
    $where_check_status['phone_number'] = $this->input->post('phone_number');    
    $count_check_status = $this->general_model->get_info("count(1) as count", "mark_customer", $where_check_status);                

    if($count_check_status->row()->count > 0){
        $returnarray['error'] = "Failed!";
			$returnarray['error_text'] = 'The Visitor has been Marked by another user';
			echo json_encode($returnarray);	
			exit;		
    }

    $data['phone_number'] = $this->input->post('phone_number');
    $data['status'] = $this->input->post('status');            

    $this->db->insert('mark_customer',$data);
    }                    	

	echo json_encode($returnarray);	
}
}