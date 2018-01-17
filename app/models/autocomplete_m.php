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

}
