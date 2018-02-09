<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class medical_referral_m extends CI_Model{
    // list all medical
    public function list_referral_m(){
        $query = $this->db->get('medical_referral');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all medical END
    
    // get case of resident ID
    public function get_res_referral_case($rid){
        
        $this->db->where('res_id', $rid);
        $query = $this->db->get('medical_referral');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get case of resident ID END
    
    
    
    // add new medical referral
    public function add_referral_m(){
      
        $form_fields = array(
            'rf_idnumber' =>trim(stripslashes($this->input->post('CaseIDNum'))),
            'res_id' =>trim(stripslashes($this->input->post('ResID'))),
            'rf_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'rf_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'rf_subjective' =>trim(stripslashes($this->input->post('Subjective'))),
            'rf_objective' =>trim(stripslashes($this->input->post('Objective'))),
            'rf_assessment' =>trim(stripslashes($this->input->post('Assessment'))),
            'rf_plan' =>trim(stripslashes($this->input->post('Plan'))),
            'rf_provider' =>trim(stripslashes($this->input->post('AttendingProvider'))),
            'rf_created' =>globTimeNow
        );
        $this->db->insert('medical_referral', $form_fields);
    }
    // add new medical referral END
    
     
    
    // get referral case
    public function get_referral_case($cid){
        
        $this->db->where('rf_id', $cid);
        $query = $this->db->get('medical_referral');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get referral case END
    
    
    
    
    // edit medical
    public function edit_referral_m(){
        $referralid = $this->input->post('referralID');
        
        $form_fields = array(
            'rf_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'rf_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'rf_subjective' =>trim(stripslashes($this->input->post('Subjective'))),
            'rf_objective' =>trim(stripslashes($this->input->post('Objective'))),
            'rf_assessment' =>trim(stripslashes($this->input->post('Assessment'))),
            'rf_plan' =>trim(stripslashes($this->input->post('Plan'))),
            'rf_provider' =>trim(stripslashes($this->input->post('AttendingProvider')))
        );
        
        $this->db->where('rf_id', $referralid);
        $query = $this->db->update('medical_referral', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit medical ID
    // delete medical
    public function delete_referral_m($cid){
        $this->db->where('rf_id', $cid);
        $this->db->delete('medical_referral');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete medical END
    

}