<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class household_m extends CI_Model{
    // list all household
    public function list_household_m(){
        $query = $this->db->get('household');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all household END
    // add new household
    public function add_household_m(){
        $form_fields = array(
            'hh_idnumber' =>trim(stripslashes($this->input->post('household_id_num'))),
            'hh_family_serial' =>strtolower(trim(stripslashes($this->input->post('family_serial_num')))),
            'hh_created' =>globTimeNow
        );
        $this->db->insert('household', $form_fields);
    }
    // add new household END
    // get household
    public function get_household_m($hid){
        
        $this->db->where('hh_id', $hid);
        $query = $this->db->get('household');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get household ID
    // edit household
    public function edit_household_m(){
        $hid = $this->input->post('household_id');
        
        $form_fields = array(
            'hh_family_serial' =>trim(stripslashes($this->input->post('family_serial_num')))
        );
        
        $this->db->where('hh_id', $hid);
        $query = $this->db->update('household', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit household ID
    // delete household
    public function delete_household_m($hid){
        $this->db->where('hh_id', $hid);
        $this->db->delete('household');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete household END
}