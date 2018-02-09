<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class brgy_m extends CI_Model {

    // get brgy
    public function get_brgy_m() {

        $this->db->where('bp_id', 1);
        $query = $this->db->get('barangay_profile');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get brgy END
    // edit brgy
    public function edit_brgy_m($logourl) {
        $bpid = 1;

        $form_fields = array(
            'bp_name' => trim(stripslashes($this->input->post('bp_name'))),
            'bp_address' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_address'))))),
            'bp_captain' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_captain'))))),
            'bp_k1' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k1'))))),
            'bp_k2' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k2'))))),
            'bp_k3' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k3'))))),
            'bp_k4' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k4'))))),
            'bp_k5' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k5'))))),
            'bp_k6' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k6'))))),
            'bp_k7' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_k7'))))),
            'bp_secretary' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_secretary'))))),
            'bp_treasurer' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_treasurer'))))),
            'bp_city' => ucwords(strtolower(trim(stripslashes($this->input->post('bp_city'))))),
            'bp_province' => trim(stripslashes($this->input->post('bp_province'))),
            'bp_region' => trim(stripslashes($this->input->post('bp_region'))),
            'bp_logo' => $logourl
        );
        
        
        $this->db->where('bp_id', $bpid);
        $query = $this->db->update('barangay_profile', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }

    // edit brgy END
    
    
    // edit brgy LOGO
    public function edit_brgy_logo_m($logourl) {
        $bpid = 1;
        $form_fields = array(
            'bp_logo' => $logourl
        );
        
        $this->db->where('bp_id', $bpid);
        $query = $this->db->update('barangay_profile', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }

    // edit brgy LOGO END
    
    
    

}
