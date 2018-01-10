<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class clearance_b_m extends CI_Model{
    // list all clearance_business
    public function list_clearance_b_m(){
        $query = $this->db->get('clearance_business');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all clearance_business END
    // add new clearance_business
    public function add_clearance_b_m(){
        $form_fields = array(
            'bc_idnumber' =>trim(stripslashes($this->input->post('clearance_business_id'))),
            'bc_title' =>ucwords(strtolower(trim(stripslashes($this->input->post('Title'))))),
            'bc_name' =>ucwords(strtolower(trim(stripslashes($this->input->post('OwnersName'))))),
            'bc_address' =>trim(stripslashes($this->input->post('Address'))),
            'bc_or_number' =>trim(stripslashes($this->input->post('ORNumber'))),
            'bc_business_name' =>ucwords(strtolower(trim(stripslashes($this->input->post('BusinessName'))))),
            'bc_business_type' =>ucwords(trim(stripslashes($this->input->post('BusinessType')))),
            'bc_business_address' =>trim(stripslashes($this->input->post('BusinessAddress'))),
            'bc_issued' =>trim(stripslashes($this->input->post('DateIssued'))),
            'bc_validity' =>trim(stripslashes($this->input->post('DateExpire'))),
            'bc_created' =>globTimeNow
        );
        $this->db->insert('clearance_business', $form_fields);
    }
    // add new clearance_business END
    // get clearance_business
    public function get_clearance_b_m($bc_id){
        
        $this->db->where('bc_id', $bc_id);
        $query = $this->db->get('clearance_business');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get clearance_business ID
    // edit clearance_business
    public function edit_clearance_business_m(){
        $bc_id = $this->input->post('bc_id');
        
        $form_fields = array(
            'bc_idnumber' =>trim(stripslashes($this->input->post('clearance_business_id'))),
            'bc_title' =>ucwords(strtolower(trim(stripslashes($this->input->post('Title'))))),
            'bc_name' =>ucwords(strtolower(trim(stripslashes($this->input->post('OwnersName'))))),
            'bc_address' =>trim(stripslashes($this->input->post('Address'))),
            'bc_or_number' =>trim(stripslashes($this->input->post('ORNumber'))),
            'bc_business_name' =>ucwords(strtolower(trim(stripslashes($this->input->post('BusinessName'))))),
            'bc_business_type' =>ucwords(trim(stripslashes($this->input->post('BusinessType')))),
            'bc_business_address' =>trim(stripslashes($this->input->post('BusinessAddress'))),
        );
        
        $this->db->where('bc_id', $bc_id);
        $query = $this->db->update('clearance_business', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit clearance_business ID
    // delete clearance_business
    public function delete_clearance_business_m($bc_id){
        $this->db->where('bc_id', $bc_id);
        $this->db->delete('clearance_business');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete clearance_business END
}