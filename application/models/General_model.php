<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class General_model extends CI_Model {

    function __construct(){
        parent::__construct();
    }    

    public function get_info($selected="", $table, $where=array(), $sorting=array(),$join=array(),$exception=array(),$like=array(),$where_in=array(),$limit=-99,$group_by=""){
        $this->db->select($selected);
        if(count($where) > 0){
          $this->db->where($where);
        }
        if(count($where_in) > 0){
            $this->db->where_in($where_in['field'],$where_in['value']);
        }
        if(count($like) > 0){
            for($index=0;$index < count($like); $index++){
                $this->db->like($like[$index]['field'], $like[$index]['value']);
            }
        }
        if(count($join) > 0){
            for($index=0;$index < count($join); $index++){
                $this->db->join($join[$index]['table'],$join[$index]['connection'],$join[$index]['type']);
            }
        }
        if(count($exception) > 0){
            if($exception['value'] == null){
                $field_exception = $exception['field'];
                $this->db->where("$field_exception is not null");
            }else{
                $this->db->where_not_in($exception['field'],$exception['value']);
            }
        }
        if(count($sorting) > 0){
            $this->db->order_by($sorting['field'],$sorting['sort']);
        }
        if($limit > 0){
            $this->db->limit($limit);
        }
        if($group_by != ""){
            $this->db->group_by($group_by);
        }

        $query = $this->db->get($table);
        if($query->num_rows() > 0){
          return $query;
        }
        return false;
    }    
}
