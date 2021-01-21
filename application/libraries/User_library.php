<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_library {

    function __construct(){

    }
   
    public function show_user_access(){              
        $CI =& get_instance();                
        return $CI->session->userdata('user_access');
    }
    
    public function show_background_access(){
        $CI =& get_instance();
        return $CI->session->userdata('background_access');
    }            
    
    public function show_location_access(){
        $CI =& get_instance();
        return $CI->session->userdata('location_access');
    }
    
    public function show_user_group_access(){
        $CI =& get_instance();
        return $CI->session->userdata('user_group_access');
    }       

    public function show_recap_visitor_access(){
        $CI =& get_instance();
        return $CI->session->userdata('recap_visitor_access');
    }       
    
    public function show_report_access(){
        $CI =& get_instance();
        return $CI->session->userdata('report_access');
    }

    public function show_declaration_form_access(){
        $CI =& get_instance();
        return $CI->session->userdata('declaration_form_access');
    }

    public function show_my_task_access(){
        $CI =& get_instance();
        return $CI->session->userdata('my_task_access');
    }

    public function show_visitor_in_building_access(){
        $CI =& get_instance();
        return $CI->session->userdata('visitor_in_building_access');
    }

    public function show_location_my_task_access(){
        $CI =& get_instance();
        return $CI->session->userdata('location_my_task_access');
    }
        
    public function checking_page_access($page,$type="",$action=""){        
        $CI =& get_instance();
        $status = false;
        if($type == "user"){
            $user_data_access = $this->show_user_access();            
            if($action == "view"){                
                $status = strpos($user_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($user_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($user_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($user_data_access, ';4;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "background"){
            $background_data_access = $this->show_background_access();
            if($action == "view"){
                $status = strpos($background_data_access, ';1;');
            }elseif($action == "edit"){
                $status = strpos($background_data_access, ';2;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "location"){
            $location_data_access = $this->show_location_access();
            if($action == "view"){
                $status = strpos($location_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($location_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($location_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($location_data_access, ';4;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "user_group"){
            $user_group_data_access = $this->show_user_group_access();            
            if($action == "view"){
                $status = strpos($user_group_data_access, ';1;');
            }elseif($action == "add"){
                $status = strpos($user_group_data_access, ';2;');
            }elseif($action == "edit"){
                $status = strpos($user_group_data_access, ';3;');
            }elseif($action == "delete"){
                $status = strpos($user_group_data_access, ';4;');
            }
            if($status !== false){
                $status = true;
            }
        }elseif($type == "recap_visitor"){
            $recap_visitor_data_access = $this->show_recap_visitor_access();            
            if($action == "view"){
                $status = strpos($recap_visitor_data_access, ';1;');
            }elseif($action == "mark"){
                $status = strpos($recap_visitor_data_access, ';2;');
            }elseif($action == "unmark"){
                $status = strpos($recap_visitor_data_access, ';3;');
            }
            if($status !== false){
                $status = true;
            }
        }                           
        if($status == false){
            $CI->session->set_flashdata('error','You have no access to that page.');
            redirect("login");
        }
    }

    public function show_username(){
        $CI =& get_instance();
        return $CI->session->userdata('username');
    }
    
    public function reset_login_info(){
        $CI =& get_instance();
        $username = $this->show_username();
        
        if($username != ""){
            $userinfo = $CI->user_group_model->userinfo($username);
            
            $CI->session->set_userdata('user_id',$userinfo->user_id);
					$CI->session->set_userdata('userfullname',$userinfo->usr_fullname);
					$CI->session->set_userdata('username',$userinfo->user_name);
					$CI->session->set_userdata('group',$userinfo->usr_group);
					$CI->session->set_userdata('user_access',$userinfo->user_all_access);
					$CI->session->set_userdata('user_group_access',$userinfo->user_group_all_access);
					$CI->session->set_userdata('background_access',$userinfo->background_all_access);					
                    $CI->session->set_userdata('location_access',$userinfo->location_all_access);							
                    $CI->session->set_userdata('report_access',$userinfo->report_all_access);            
                    $CI->session->set_userdata('declaration_form_access',$userinfo->declaration_form_all_access);            
                    $CI->session->set_userdata('my_task_access',$userinfo->my_task_all_access);            
                    $CI->session->set_userdata('visitor_in_building_access',$userinfo->visitor_in_building_all_access);            
                    $CI->session->set_userdata('location_my_task_access',$userinfo->location_my_task_all_access);            
                    $CI->session->set_userdata('recap_visitor_access',$userinfo->recap_visitor_all_access);            
            return TRUE;
        }else{
            return FALSE;
        }
    }
}


