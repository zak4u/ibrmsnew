<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Autocomplete extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct(); // needed when adding a constructor to a controller
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
        $this->load->model('autocomplete_m', 'autocomplete_m');
    }

    public function resident_search() {
        $search_data = $this->input->post('search_data');
        $query = $this->autocomplete_m->get_data('resident', $search_data);
        foreach ($query->result() as $row):
            echo "<li><a href='" . base_url('residents/view/' . $row->res_id) . "'><span>$row->res_lastname, $row->res_firstname $row->res_middlename $row->res_extension</span> - $row->res_dob</a></li>";
        endforeach;
    }
    
    public function resident_search_val() {
        $search_data = $this->input->post('search_data');
        $query = $this->autocomplete_m->get_data('resident', $search_data);
        foreach ($query->result() as $row):
            echo "<li><a href='#' id='$row->res_id'><span id='$row->res_id'>$row->res_firstname $row->res_middlename $row->res_lastname $row->res_extension</span> - $row->res_dob</a></li>";
        endforeach;
    }
    
    public function get_res_val(){
        $keyword=$this->input->post('keyword');
        $data=$this->autocomplete_m->get_row($keyword);        
        echo json_encode($data);
    }
    
    public function get_biz_clearance_val(){
        $keyword=$this->input->post('keyword');
        $data=$this->autocomplete_m->get_row_biz_clearance($keyword);        
        echo json_encode($data);
    }
    
    public function get_jcase(){
        $keyword=$this->input->post('keyword');
        $data=$this->autocomplete_m->get_row_jcase($keyword);        
        echo json_encode($data);
    }


//    
//    FOR INPUT FIELD UPDATE
//    
//    public function resident_search() {
//        $search_data = $this->input->post('search_data');
//        $query = $this->autocomplete_m->get_data('resident', $search_data);
//        foreach ($query->result() as $row):
//            echo "<li><a href='#'><span>$row->res_firstname $row->res_lastname</span> $row->res_dob <strong>$row->res_id</strong></a></li>";
//        endforeach;
//    }
}
