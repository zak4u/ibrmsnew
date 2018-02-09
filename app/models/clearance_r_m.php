<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class clearance_r_m extends CI_Model {

    // list all clearance_resident
    public function list_clearance_r_m() {
        $query = $this->db->get('clearance_resident');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // list all clearance_resident END
    // add new clearance_resident
    public function add_clearance_r_m() {
        $form_fields = array(
            'rc_idnumber' => trim(stripslashes($this->input->post('clearance_resident_id'))),
            'rc_name' => ucwords(strtolower(trim(stripslashes($this->input->post('ResidentName'))))),
            'res_id' => trim(stripslashes($this->input->post('ResidentNameID'))),
            'rc_age' => trim(stripslashes($this->input->post('Age'))),
            'rc_address' => trim(stripslashes($this->input->post('Address'))),
            'rc_purpose' => trim(stripslashes($this->input->post('PurposeOfClearance'))),
            'rc_or_number' => trim(stripslashes($this->input->post('ornum'))),
            'rc_issued' => trim(stripslashes($this->input->post('DateIssued'))),
            'rc_validity' => trim(stripslashes($this->input->post('DateExpire'))),
            'rc_created' => globTimeNow
        );
        $this->db->insert('clearance_resident', $form_fields);
    }

    // add new clearance_resident END
    // get clearance_resident
    public function get_clearance_r_m($rc_id) {

        $this->db->where('rc_id', $rc_id);
        $query = $this->db->get('clearance_resident');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get clearance_resident ID
    // get get_res_clearance_r_m
    public function get_res_clearance_r_m($rid) {

        $this->db->where('res_id', $rid);
        $query = $this->db->get('clearance_resident');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get get_res_clearance_r_m END
    // edit clearance_resident
    public function edit_clearance_resident_m() {
        $rc_id = $this->input->post('rc_id');

        $form_fields = array(
            'rc_name' => ucwords(strtolower(trim(stripslashes($this->input->post('ResidentName'))))),
            'res_id' => trim(stripslashes($this->input->post('ResidentNameID'))),
            'rc_age' => trim(stripslashes($this->input->post('Age'))),
            'rc_address' => trim(stripslashes($this->input->post('Address'))),
            'rc_purpose' => trim(stripslashes($this->input->post('PurposeOfClearance'))),
            'rc_or_number' => trim(stripslashes($this->input->post('ornum'))),
            'rc_issued' => trim(stripslashes($this->input->post('DateIssued'))),
            'rc_validity' => trim(stripslashes($this->input->post('DateExpire')))
        );

        $this->db->where('rc_id', $rc_id);
        $query = $this->db->update('clearance_resident', $form_fields);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // edit clearance_resident ID
    // delete clearance_resident
    public function delete_clearance_resident_m($rc_id) {
        $this->db->where('rc_id', $rc_id);
        $this->db->delete('clearance_resident');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // delete clearance_resident END
    
}
