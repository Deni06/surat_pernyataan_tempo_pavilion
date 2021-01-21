<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Report_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    public function get_report(){        
        
        $search_date = $this->session->userdata('SEARCH_PERIOD_REPORT');
        $start_date = "";
        $end_date = "";
        if($search_date != ""){
            $daterange_exploded = preg_split('@-@', $search_date, NULL, PREG_SPLIT_NO_EMPTY);
            if(count($daterange_exploded) > 0){
                $start_date_reformat = preg_split('@/@',trim($daterange_exploded[0]," "), NULL, PREG_SPLIT_NO_EMPTY);
                $start_date_format = $start_date_reformat[2]."-".$start_date_reformat[1]."-".$start_date_reformat[0];
                $end_date_reformat = preg_split('@/@',trim($daterange_exploded[1]," "), NULL, PREG_SPLIT_NO_EMPTY);
                $end_date_format = $end_date_reformat[2]."-".$end_date_reformat[1]."-".$end_date_reformat[0];
                
                $start_date = date("Y-m-d", strtotime($start_date_format));
                $end_date = date("Y-m-d", strtotime($end_date_format));
            }
            
        }else{
            $start_date = date('Y-m-01');
            $end_date = date('Y-m-t');
        }
        
        $this->db->select("r.*, sp.type_id_card, sp.type_input_official_id_number, 
        sp.email, sp.created_on, sp.name, sp.official_id_number, l.nama_lokasi");
        $this->db->join("surat_pernyataan sp","r.surat_pernyataan_id = sp.surat_pernyataan_id","left");                
        $this->db->join("lokasi l","l.lokasi_id = r.location_checkin","left");                
        $this->db->where("((date(r.check_in) BETWEEN '$start_date' AND '$end_date') 
        OR (date(r.check_out) BETWEEN '$start_date' AND '$end_date')) AND is_submit = 1 AND check_out != ''");        
        $this->db->order_by("r.check_in", "ASC");
        $query = $this->db->get("registration r");
                        
        if($query->num_rows() > 0){
            return $query->result();
        }
        return false;
    }

    public function get_report_occupancy($date){                                
        $this->db->select("
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 07:00:00' and '".$date." 07:59:00') as '1',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 07:00:00' and '".$date." 07:59:00') as '2',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 08:00:00' and '".$date." 08:59:00') as '3',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 08:00:00' and '".$date." 08:59:00') as '4',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 09:00:00' and '".$date." 09:59:00') as '5',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 09:00:00' and '".$date." 09:59:00') as '6',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 10:00:00' and '".$date." 10:59:00') as '7',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 10:00:00' and '".$date." 10:59:00') as '8',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 11:00:00' and '".$date." 11:59:00') as '9',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 11:00:00' and '".$date." 11:59:00') as '10',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 12:00:00' and '".$date." 12:59:00') as '11',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 12:00:00' and '".$date." 12:59:00') as '12',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 13:00:00' and '".$date." 13:59:00') as '13',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 13:00:00' and '".$date." 13:59:00') as '14',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 14:00:00' and '".$date." 14:59:00') as '15',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 14:00:00' and '".$date." 14:59:00') as '16',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 15:00:00' and '".$date." 15:59:00') as '17',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 15:00:00' and '".$date." 15:59:00') as '18',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 16:00:00' and '".$date." 16:59:00') as '19',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 16:00:00' and '".$date." 16:59:00') as '20',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 17:00:00' and '".$date." 17:59:00') as '21',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 17:00:00' and '".$date." 17:59:00') as '22',
        (SELECT COUNT(1) FROM registration where check_in between '".$date." 18:00:00' and '".$date." 18:59:00') as '23',
        (SELECT COUNT(1) FROM registration where check_out between '".$date." 18:00:00' and '".$date." 18:59:00') as '24',        
        ");        
        $this->db->limit(1);
        $query = $this->db->get("registration");
                        
        if($query->num_rows() > 0){                        
            return $query->row_array();
        }
        return false;
    }
}
