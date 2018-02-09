<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class kp07_m extends CI_Model {

    // list all kp07
    public function list_kp07_m() {
        $query = $this->db->get('kp07');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // list all kp07 END
    // 
    // list ongoing kp07
    public function list_kp07_status_m($status) {
        $this->db->where('kp07_status', $status);
        $query = $this->db->get('kp07');


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // list ongoing kp07 END
    // list all involved
    public function list_kp07_involved_m() {

        $this->db->select('*')
                ->from('kp07')
                ->join('judicial_residents', 'kp07.kp07_casenumber = judicial_residents.kp07_casenumber');
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // list all involved END
    // list all involved in case
    public function list_kp07_involved_case_m($casenum) {

        $this->db->select('*')
                ->from('kp07')
                ->join('judicial_residents', 'kp07.kp07_casenumber = judicial_residents.kp07_casenumber')
                ->where('kp07.kp07_casenumber', $casenum);
        ;
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // list all involved in case END
    // get restype
    public function list_kp07_involved_case_restype_m($casenum, $restype) {

        $this->db->select('*')
                ->from('kp07')
                ->join('judicial_residents', 'kp07.kp07_casenumber = judicial_residents.kp07_casenumber')
                ->where('kp07.kp07_casenumber', $casenum)
                ->where('judicial_residents.res_type', $restype);
        ;
        $query = $this->db->get();


        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get restype END
    // add new kp07
    public function add_kp07_m() {
        $complainants = $this->input->post('ComplainantName');
        $complainantsID = $this->input->post('ComplainantNameID');

        $respondents = $this->input->post('RespondentName[]');
        $respondentsID = $this->input->post('RespondentNameID[]');

        $form_fieldsC = array(
            'res_id' => $complainantsID,
            'res_name' => $complainants,
            'res_type' => "Complainant",
            'kp07_casenumber' => trim(stripslashes($this->input->post('CaseIDNum'))),
            'res_flag' => trim(stripslashes($this->input->post('Status'))),
            'jr_created' => globTimeNow
        );
        $this->db->insert('judicial_residents', $form_fieldsC);

        if (count($respondentsID) > 0) {
            foreach ($respondentsID as $respondentID) {
                foreach ($respondents as $respondent) {
                    $form_fieldsR = array(
                        'res_id' => $respondentID,
                        'res_name' => $respondent,
                        'res_type' => "Respondent",
                        'kp07_casenumber' => trim(stripslashes($this->input->post('CaseIDNum'))),
                        'res_flag' => trim(stripslashes($this->input->post('Status'))),
                        'jr_created' => globTimeNow
                    );
                    $this->db->insert('judicial_residents', $form_fieldsR);
                }
            }
        }

        $form_fields = array(
            'kp07_idnumber' => trim(stripslashes($this->input->post('FormIDNum'))),
            'kp07_casenumber' => trim(stripslashes($this->input->post('CaseIDNum'))),
            'kp07_complaint' => trim(stripslashes($this->input->post('Complaint'))),
            'kp07_status' => trim(stripslashes($this->input->post('Status'))),
            'kp07_addedby' => trim(stripslashes($this->input->post('Staff'))),
            'kp07_created' => globTimeNow
        );
        $this->db->insert('kp07', $form_fields);
    }

    // add new kp07 END
    // get kp07
    public function get_kp07_m($casenum) {

        $this->db->where('kp07_casenumber', $casenum);
        $query = $this->db->get('kp07');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get kp07 ID
    // edit kp07
    public function edit_kp07_m() {
        $casenum = $this->input->post('CaseIDNum');

        $complainants = $this->input->post('ComplainantName');
        $complainantsID = $this->input->post('ComplainantNameID');

        $respondents = $this->input->post('RespondentName');
        $respondentsID = $this->input->post('RespondentNameID');

        $form_fieldsC = array(
            'res_flag' => trim(stripslashes($this->input->post('Status')))
        );
        $this->db->where('res_name', $complainants);
        $this->db->where('kp07_casenumber', $casenum);
        $query = $this->db->update('judicial_residents', $form_fieldsC);



        $form_fieldsR = array(
            'res_flag' => trim(stripslashes($this->input->post('Status')))
        );
        $this->db->where('res_name', $respondents);
        $this->db->where('kp07_casenumber', $casenum);
        $query = $this->db->update('judicial_residents', $form_fieldsR);


        $form_fields = array(
            'kp07_complaint' => trim(stripslashes($this->input->post('Complaint'))),
            'kp07_status' => trim(stripslashes($this->input->post('Status'))),
            'kp07_addedby' => trim(stripslashes($this->input->post('Staff'))),
        );

        $this->db->where('kp07_casenumber', $casenum);
        $query = $this->db->update('kp07', $form_fields);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // edit kp07 ID
    // delete kp07
    // delete purok
    public function delete_kp07_m($casenum) {
        $this->db->where('kp07_casenumber', $casenum);
        $this->db->delete('kp07');

        $this->db->where('kp07_casenumber', $casenum);
        $this->db->delete('judicial_residents');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // delete purok END
    // delete kp07 END
    // get RESIDENT-JUDICIAL CASE
    public function get_res_case($rid) {
        $this->db->where('res_id', $rid);
        $this->db->where('res_type', 'Respondent');
        $this->db->where('res_flag', 'On-going');
        $query = $this->db->get('judicial_residents');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get RESIDENT-JUDICIAL CASE END
}
