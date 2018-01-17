<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class medical_itr_m extends CI_Model{
    // list all medical
    public function list_itr_m(){
        $query = $this->db->get('medical_itr');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all medical END
    
    
    // add new medical itr
    public function add_itr_m(){
        $form_fields = array(
            'itr_idnumber' =>trim(stripslashes($this->input->post('CaseIDNum'))),
            'res_id' =>trim(stripslashes($this->input->post('ResID'))),
            'itr_consult_mode' =>ucwords(strtolower(trim(stripslashes($this->input->post('ModeOfConsultation'))))),
            'itr_referred_from' =>trim(stripslashes($this->input->post('ReferredFrom'))),
            'itr_referred_to' =>trim(stripslashes($this->input->post('ReferredTo'))),
            'itr_referral_reasons' =>trim(stripslashes($this->input->post('ReferralReasons'))),
            'itr_referred_by' =>ucwords(strtolower(trim(stripslashes($this->input->post('ReferredBy'))))),
            'itr_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'itr_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'itr_bp' =>trim(stripslashes($this->input->post('BloodPressure'))),
            'itr_temperature' =>trim(stripslashes($this->input->post('Temperature'))),
            'itr_attending_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('AttendingProvider'))))),
            'itr_nature_of_visit' =>trim(stripslashes($this->input->post('NatureofVisit'))),
            'itr_consult_type' =>trim(stripslashes($this->input->post('TypeofConsultation'))),
            'itr_complaints' =>trim(stripslashes($this->input->post('ChiefComplaints'))),
            'itr_diagnosis' =>trim(stripslashes($this->input->post('Diagnosis'))),
            'itr_medication' =>trim(stripslashes($this->input->post('Medication'))),
            'itr_lab_tests' =>trim(stripslashes($this->input->post('LabTests'))),
            'itr_lab_findings' =>trim(stripslashes($this->input->post('LabFindings'))),
            'itr_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider'))))),
            'itr_created' =>globTimeNow
        );
        $this->db->insert('medical_itr', $form_fields);
    }
    // add new medical itr END
    // get case of resident ID
    public function get_res_itr_case($rid){
        
        $this->db->where('res_id', $rid);
        $query = $this->db->get('medical_itr');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get case of resident ID END
     
    
    // get itr case
    public function get_itr_case($cid){
        
        $this->db->where('itr_id', $cid);
        $query = $this->db->get('medical_itr');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get itr case END
    
    
    
    
    // edit medical
    public function edit_itr_m(){
        $itrid = $this->input->post('itrID');
        
        $form_fields = array(
            'itr_consult_mode' =>ucwords(strtolower(trim(stripslashes($this->input->post('ModeOfConsultation'))))),
            'itr_referred_from' =>trim(stripslashes($this->input->post('ReferredFrom'))),
            'itr_referred_to' =>trim(stripslashes($this->input->post('ReferredTo'))),
            'itr_referral_reasons' =>trim(stripslashes($this->input->post('ReferralReasons'))),
            'itr_referred_by' =>ucwords(strtolower(trim(stripslashes($this->input->post('ReferredBy'))))),
            'itr_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'itr_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'itr_bp' =>trim(stripslashes($this->input->post('BloodPressure'))),
            'itr_temperature' =>trim(stripslashes($this->input->post('Temperature'))),
            'itr_attending_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('AttendingProvider'))))),
            'itr_nature_of_visit' =>trim(stripslashes($this->input->post('NatureofVisit'))),
            'itr_consult_type' =>trim(stripslashes($this->input->post('TypeofConsultation'))),
            'itr_complaints' =>trim(stripslashes($this->input->post('ChiefComplaints'))),
            'itr_diagnosis' =>trim(stripslashes($this->input->post('Diagnosis'))),
            'itr_medication' =>trim(stripslashes($this->input->post('Medication'))),
            'itr_lab_tests' =>trim(stripslashes($this->input->post('LabTests'))),
            'itr_lab_findings' =>trim(stripslashes($this->input->post('LabFindings'))),
            'itr_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider')))))
        );
        
        $this->db->where('itr_id', $itrid);
        $query = $this->db->update('medical_itr', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit medical ID
    // delete medical
    public function delete_itr_m($cid){
        $this->db->where('itr_id', $cid);
        $this->db->delete('medical_itr');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete medical END
    

}