<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class medical_prenatal_m extends CI_Model{
    // list all medical
    public function list_prenatal_m(){
        $query = $this->db->get('medical_prenatal');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }       
    }
    // list all medical END
    
    // get case of resident ID
    public function get_res_prenatal_case($rid){
        
        $this->db->where('res_id', $rid);
        $query = $this->db->get('medical_prenatal');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get case of resident ID END
    
    
    
    // add new medical prenatal
    public function add_prenatal_m(){
       
        $immunsFull = implode(', ', $this->input->post('Immunization[]'));
       
        $form_fields = array(
            'pn_idnumber' =>trim(stripslashes($this->input->post('CaseIDNum'))),
            'res_id' =>trim(stripslashes($this->input->post('ResID'))),
            'pn_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'pn_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'pn_gravida' =>trim(stripslashes($this->input->post('Gravida'))),
            'pn_primi' =>trim(stripslashes($this->input->post('Primi'))),
            'pn_death' =>trim(stripslashes($this->input->post('Death'))),
            'pn_lmp' =>trim(stripslashes($this->input->post('LMP'))),
            'pn_edc' =>trim(stripslashes($this->input->post('EDC'))),
            'pn_bhw' =>trim(stripslashes($this->input->post('BHW'))),
            'pn_bp' =>trim(stripslashes($this->input->post('BP'))),
            'pn_weight' =>trim(stripslashes($this->input->post('Weight'))),
            'pn_height' =>trim(stripslashes($this->input->post('Height'))),
            'pn_fundal_height' =>trim(stripslashes($this->input->post('FH'))),
            'pn_fetal_heartbeat' =>trim(stripslashes($this->input->post('FHB'))),
            'pn_immunization' =>trim(stripslashes($immunsFull)),
            'pn_diagnosis_treatment' =>trim(stripslashes($this->input->post('DiagnosisTreatment'))),
            'pn_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider'))))),
            'pn_created' =>globTimeNow
        );
        $this->db->insert('medical_prenatal', $form_fields);
    }
    // add new medical prenatal END
    
     
    
    // get prenatal case
    public function get_prenatal_case($cid){
        
        $this->db->where('pn_id', $cid);
        $query = $this->db->get('medical_prenatal');
        
        if($query->num_rows()> 0){
            return $query->result();
        }else{
            return false;
        }
    }
    // get prenatal case END
    
    
    
    
    // edit medical
    public function edit_prenatal_m(){
        $prenatalid = $this->input->post('prenatalID');
        $immunsFull = implode(', ', $this->input->post('Immunization[]'));
       
        $form_fields = array(
            'pn_date' =>trim(stripslashes($this->input->post('ConsultationDate'))),
            'pn_time' =>trim(stripslashes($this->input->post('ConsultationTime'))),
            'pn_gravida' =>trim(stripslashes($this->input->post('Gravida'))),
            'pn_primi' =>trim(stripslashes($this->input->post('Primi'))),
            'pn_death' =>trim(stripslashes($this->input->post('Death'))),
            'pn_lmp' =>trim(stripslashes($this->input->post('LMP'))),
            'pn_edc' =>trim(stripslashes($this->input->post('EDC'))),
            'pn_bhw' =>trim(stripslashes($this->input->post('BHW'))),
            'pn_bp' =>trim(stripslashes($this->input->post('BP'))),
            'pn_weight' =>trim(stripslashes($this->input->post('Weight'))),
            'pn_height' =>trim(stripslashes($this->input->post('Height'))),
            'pn_fundal_height' =>trim(stripslashes($this->input->post('FH'))),
            'pn_fetal_heartbeat' =>trim(stripslashes($this->input->post('FHB'))),
            'pn_immunization' =>trim(stripslashes($immunsFull)),
            'pn_diagnosis_treatment' =>trim(stripslashes($this->input->post('DiagnosisTreatment'))),
            'pn_healthcare_provider' =>ucwords(strtolower(trim(stripslashes($this->input->post('HealthCareProvider')))))
        );
        
        $this->db->where('pn_id', $prenatalid);
        $query = $this->db->update('medical_prenatal', $form_fields);
        
        if($query){
            return true;
        }else{
            return false;
        }
    }
    // edit medical ID
    // delete medical
    public function delete_prenatal_m($cid){
        $this->db->where('pn_id', $cid);
        $this->db->delete('medical_prenatal');
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    // delete medical END
    

}