<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class autocomplete_m extends CI_Model {

    function get_data($table, $search_data) {
        if (!is_null($search_data)) {
            $this->db->select('*');
            $this->db->like("res_lastname", $search_data);
            //$this->db->or_like("res_firstname", $search_data);
            return $this->db->get($table, 10);
        }
    }
    
    public function get_row($keyword) {        
        $this->db->select('*');
        $this->db->order_by('res_id', 'DESC');
        $this->db->like("res_lastname", $keyword);
        $this->db->or_like("res_firstname", $keyword);
        return $this->db->get('resident',10)->result_array();
    }
    
    public function get_row_biz_clearance($keyword) {        
        $this->db->select('*');
        $this->db->order_by('bc_id', 'DESC');
        $this->db->like("bc_name", $keyword);
//        $this->db->or_like("bc_business_name", $keyword);
        return $this->db->get('clearance_business',10)->result_array();
    }
    
    public function get_row_jcase($keyword) {        
        $this->db->select('*');
        $this->db->order_by('jr_id', 'DESC');
        $this->db->like("res_name", $keyword);
        $this->db->or_like("kp07_casenumber", $keyword);
        return $this->db->get('judicial_residents',10)->result_array();
    }

}
