<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_users extends CI_Model {
	public function check_usr($username, $password)
		{			
			$stuts = '1';
			$gry = $this->db->select('a.*,b.user_all_access,b.user_group_all_access,b.background_all_access,
			b.report_all_access,b.location_all_access,b.declaration_form_all_access,b.my_task_all_access,
			b.visitor_in_building_all_access, b.location_my_task_all_access, b.recap_visitor_all_access')
							->join('groups b','a.usr_group = b.gro_id','left')
							->where('user_name',$username)
							->where('password', $password)
							->where('stuts',$stuts)
							->limit(1)
							->get('ms_user a');
			if($gry->num_rows()	>	0)
			{				
				return $gry->row();	
			}else{
					return array();
			}
				
				
		}//end check_usr function
		
	}///end class  ///
	
	
?>