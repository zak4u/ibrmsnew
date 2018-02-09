<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class medical_adult_m extends CI_Model{
    // list all medical
    public function list_adult_m(){
        $query = $this->db->get('medical_adult');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all medical END
    
    // get case of resident ID
    public function get_res_adult_case($rid){
        
        $this->db->where('res_id', $rid);
        $query = $this->db->get('medical_adult');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get case of resident ID END
    
    
    
    // add new medical adult
    public function add_adult_m(){
      
        $form_fields = array(
            'af_idnumber' =>trim(stripslashes($this->input->post('CaseIDNum'))),
            'res_id' =>trim(stripslashes($this->input->post('ResID'))),
            'af_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'af_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'af_next_of_kin' =>trim(stripslashes($this->input->post('NextofKin'))),
            'af_kin_relation' =>trim(stripslashes($this->input->post('Relation'))),
            'af_bp' =>trim(stripslashes($this->input->post('BloodPressure'))),
            'af_nt' =>trim(stripslashes($this->input->post('NT'))),
            'af_heredofamilial_desease' =>trim(stripslashes($this->input->post('HeredofamilialDesease'))),
            'af_allergies' =>trim(stripslashes($this->input->post('Allergies'))),
            'af_complaints' =>trim(stripslashes($this->input->post('Complaints'))),
            'af_physical_examinations' =>trim(stripslashes($this->input->post('PhysicalExaminations'))),
            'af_diagnosis_treatment' =>trim(stripslashes($this->input->post('DiagnosisTreatment'))),
            'af_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider'))))),
            'af_created' =>globTimeNow
        );
        $this->db->insert('medical_adult', $form_fields);
    }
    // add new medical adult END
    
     
    
    // get adult case
    public function get_adult_case($cid){
        
        $this->db->where('af_id', $cid);
        $query = $this->db->get('medical_adult');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get adult case END
    
    
    
    
    // edit medical
    public function edit_adult_m(){
        $adultid = $this->input->post('adultID');
        
        $form_fields = array(
            'af_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'af_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'af_next_of_kin' =>trim(stripslashes($this->input->post('NextofKin'))),
            'af_kin_relation' =>trim(stripslashes($this->input->post('Relation'))),
            'af_bp' =>trim(stripslashes($this->input->post('BloodPressure'))),
            'af_nt' =>trim(stripslashes($this->input->post('NT'))),
            'af_heredofamilial_desease' =>trim(stripslashes($this->input->post('HeredofamilialDesease'))),
            'af_allergies' =>trim(stripslashes($this->input->post('Allergies'))),
            'af_complaints' =>trim(stripslashes($this->input->post('Complaints'))),
            'af_physical_examinations' =>trim(stripslashes($this->input->post('PhysicalExaminations'))),
            'af_diagnosis_treatment' =>trim(stripslashes($this->input->post('DiagnosisTreatment'))),
            'af_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider')))))
        );
        
        $this->db->where('af_id', $adultid);
        $query = $this->db->update('medical_adult', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit medical ID
    // delete medical
    public function delete_adult_m($cid){
        $this->db->where('af_id', $cid);
        $this->db->delete('medical_adult');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete medical END
    

}