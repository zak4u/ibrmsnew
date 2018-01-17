<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class db_m extends CI_Model {

    // count all data
    public function count_data($table, $cond) {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($cond);
        return $this->db->count_all_results();
    }

    // count all data END
}
