<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class medical_pedia_m extends CI_Model{
    // list all medical
    public function list_pedia_m(){
        $query = $this->db->get('medical_pedia');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all medical END
    
    // get case of resident ID
    public function get_res_pedia_case($rid){
        
        $this->db->where('res_id', $rid);
        $query = $this->db->get('medical_pedia');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get case of resident ID END
    
    
    
    // add new medical pedia
    public function add_pedia_m(){
       
        $immunsFull = implode(', ', $this->input->post('Immunization[]'));
       
        $form_fields = array(
            'pf_idnumber' =>trim(stripslashes($this->input->post('CaseIDNum'))),
            'res_id' =>trim(stripslashes($this->input->post('ResID'))),
            'pf_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'pf_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'pf_nutritional_status' =>trim(stripslashes($this->input->post('NutritionalStatus'))),
            'pf_birth_history' =>trim(stripslashes($this->input->post('BirthHistory'))),
            'pf_feeding_history' =>trim(stripslashes($this->input->post('FeedingHistory'))),
            'pf_immunization' =>trim(stripslashes($immunsFull)),
            'pf_cardiac_rate' =>trim(stripslashes($this->input->post('CardiacRate'))),
            'pf_respiratory_rate' =>trim(stripslashes($this->input->post('RespiratoryRate'))),
            'pf_temperature' =>trim(stripslashes($this->input->post('Temperature'))),
            'pf_heredofamilial_desease' =>trim(stripslashes($this->input->post('HeredofamilialDesease'))),
            'pf_allergies' =>trim(stripslashes($this->input->post('Allergies'))),
            'pf_complaints' =>trim(stripslashes($this->input->post('Complaints'))),
            'pf_physical_examinations' =>trim(stripslashes($this->input->post('PhysicalExaminations'))),
            'pf_diagnosis_treatment' =>trim(stripslashes($this->input->post('DiagnosisTreatment'))),
            'pf_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider'))))),
            'pf_created' =>globTimeNow
        );
        $this->db->insert('medical_pedia', $form_fields);
    }
    // add new medical pedia END
    
     
    
    // get pedia case
    public function get_pedia_case($cid){
        
        $this->db->where('pf_id', $cid);
        $query = $this->db->get('medical_pedia');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get pedia case END
    
    
    
    
    // edit medical
    public function edit_pedia_m(){
        $pediaid = $this->input->post('pediaID');
        $immunsFull = implode(', ', $this->input->post('Immunization[]'));
        
        $form_fields = array(
            'pf_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'pf_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'pf_nutritional_status' =>trim(stripslashes($this->input->post('NutritionalStatus'))),
            'pf_birth_history' =>trim(stripslashes($this->input->post('BirthHistory'))),
            'pf_feeding_history' =>trim(stripslashes($this->input->post('FeedingHistory'))),
            'pf_immunization' =>trim(stripslashes($immunsFull)),
            'pf_cardiac_rate' =>trim(stripslashes($this->input->post('CardiacRate'))),
            'pf_respiratory_rate' =>trim(stripslashes($this->input->post('RespiratoryRate'))),
            'pf_temperature' =>trim(stripslashes($this->input->post('Temperature'))),
            'pf_heredofamilial_desease' =>trim(stripslashes($this->input->post('HeredofamilialDesease'))),
            'pf_allergies' =>trim(stripslashes($this->input->post('Allergies'))),
            'pf_complaints' =>trim(stripslashes($this->input->post('Complaints'))),
            'pf_physical_examinations' =>trim(stripslashes($this->input->post('PhysicalExaminations'))),
            'pf_diagnosis_treatment' =>trim(stripslashes($this->input->post('DiagnosisTreatment'))),
            'pf_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider')))))
        );
        
        $this->db->where('pf_id', $pediaid);
        $query = $this->db->update('medical_pedia', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit medical ID
    // delete medical
    public function delete_pedia_m($cid){
        $this->db->where('pf_id', $cid);
        $this->db->delete('medical_pedia');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete medical END
    

}