<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class purok_m extends CI_Model{
    // list all purok
    public function list_purok_m(){
        $query = $this->db->get('purok');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all purok END
    // add new purok
    public function add_purok_m(){
        $form_fields = array(
            'purok_idnumber' =>trim(stripslashes($this->input->post('purok_id_num'))),
            'purok_name' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_name'))))),
            'purok_address' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_address'))))),
            'purok_lat' =>trim(stripslashes($this->input->post('purok_lat'))),
            'purok_long' =>trim(stripslashes($this->input->post('purok_long'))),
            'purok_president' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_president'))))),
            'purok_vice_president' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_vice_president'))))),
            'purok_secretary' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_secretary'))))),
            'purok_treasurer' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_treasurer'))))),
            'purok_created' =>globTimeNow
        );
        $this->db->insert('purok', $form_fields);
    }
    // add new purok END
    // get purok
    public function get_purok_m($pid){
        
        $this->db->where('purok_id', $pid);
        $query = $this->db->get('purok');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get purok ID
    // edit purok
    public function edit_purok_m(){
        $pid = $this->input->post('purok_id');
        
        $form_fields = array(
            'purok_name' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_name'))))),
            'purok_address' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_address'))))),
            'purok_lat' =>trim(stripslashes($this->input->post('purok_lat'))),
            'purok_long' =>trim(stripslashes($this->input->post('purok_long'))),
            'purok_president' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_president'))))),
            'purok_vice_president' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_vice_president'))))),
            'purok_secretary' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_secretary'))))),
            'purok_treasurer' =>ucwords(strtolower(trim(stripslashes($this->input->post('purok_treasurer')))))
        );
        
        $this->db->where('purok_id', $pid);
        $query = $this->db->update('purok', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit purok ID
    // delete purok
    public function delete_purok_m($pid){
        $this->db->where('purok_id', $pid);
        $this->db->delete('purok');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete purok END
    

}