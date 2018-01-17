<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class resident_m extends CI_Model {

    // list all resident
    public function list_resident_m() {
        //$query=$this->db->order_by('res_id', 'DESC');
        $query = $this->db->get('resident');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // list all resident END
    // add new resident
    public function add_resident_m() {
        $form_fields = array(
            'res_idnumber' => trim(stripslashes($this->input->post('res_id_num'))),
            'res_firstname' => ucwords(strtolower(trim(stripslashes($this->input->post('FirstName'))))),
            'res_middlename' => ucwords(strtolower(trim(stripslashes($this->input->post('MiddleName'))))),
            'res_lastname' => ucwords(strtolower(trim(stripslashes($this->input->post('LastName'))))),
            'res_extension' => trim(stripslashes($this->input->post('Extension'))),
            'res_dob' => trim(stripslashes($this->input->post('DOB'))),
            'res_pob' => trim(stripslashes($this->input->post('POB'))),
            'res_nationality' => ucwords(strtolower(trim(stripslashes($this->input->post('Nationality'))))),
            'res_religion' => ucwords(strtolower(trim(stripslashes($this->input->post('Religion'))))),
            'res_gender' => ucwords(strtolower(trim(stripslashes($this->input->post('gender'))))),
            'res_is_pwd' => trim(stripslashes($this->input->post('pwd'))),
            'res_is_deceased' => trim(stripslashes($this->input->post('deceased'))),
            'res_bloodtype' => trim(stripslashes($this->input->post('Bloodtype'))),
            'res_height' => trim(stripslashes($this->input->post('Height'))),
            'res_weight' => trim(stripslashes($this->input->post('Weight'))),
            'res_civil_status' => trim(stripslashes($this->input->post('CivilStatus'))),
            'res_spouse' => trim(stripslashes($this->input->post('SpouseName'))),
            'res_fathers_name' => trim(stripslashes($this->input->post('FathersName'))),
            'res_mothers_name' => trim(stripslashes($this->input->post('MothersName'))),
            'res_photo' => trim(stripslashes($this->input->post('UploadPhoto'))),
            'res_home_ownership' => trim(stripslashes($this->input->post('HomeOwnership'))),
            'res_house_number' => trim(stripslashes($this->input->post('Address'))),
            'res_street' => trim(stripslashes($this->input->post('Street'))),
            'res_purok' => trim(stripslashes($this->input->post('Purok'))),
            'res_barangay' => trim(stripslashes($this->input->post('Barangay'))),
            'res_city' => trim(stripslashes($this->input->post('City'))),
            'res_province' => trim(stripslashes($this->input->post('Province'))),
            'res_region' => trim(stripslashes($this->input->post('Region'))),
            'res_household_id' => trim(stripslashes($this->input->post('Household'))),
            'res_neighbors' => trim(stripslashes($this->input->post('Neighbors'))),
            'res_contact_number' => trim(stripslashes($this->input->post('ContactNumber'))),
            'res_email' => trim(stripslashes($this->input->post('Email'))),
            'res_education' => trim(stripslashes($this->input->post('EducationalAttainment'))),
            'res_employment_status' => trim(stripslashes($this->input->post('EmploymentStatus'))),
            'res_is_dswdnths' => trim(stripslashes($this->input->post('NHTS'))),
            'res_is_4ps' => trim(stripslashes($this->input->post('4Ps'))),
            'res_philhealth_id' => trim(stripslashes($this->input->post('PhilHealth'))),
            'res_philhealth_category' => trim(stripslashes($this->input->post('PhilHealthCategory'))),
            'res_is_pcb' => trim(stripslashes($this->input->post('pcb'))),
            'res_created' => globTimeNow
        );
        $this->db->insert('resident', $form_fields);
    }

    // add new resident END
    // get resident
    public function get_resident_m($pid) {

        $this->db->where('res_id', $pid);
        $query = $this->db->get('resident');

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get resident ID
    // edit resident
    public function edit_resident_m() {
        $rid = $this->input->post('res_id');

        $form_fields = array(
            'res_firstname' => ucwords(strtolower(trim(stripslashes($this->input->post('FirstName'))))),
            'res_middlename' => ucwords(strtolower(trim(stripslashes($this->input->post('MiddleName'))))),
            'res_lastname' => ucwords(strtolower(trim(stripslashes($this->input->post('LastName'))))),
            'res_extension' => trim(stripslashes($this->input->post('Extension'))),
            'res_dob' => trim(stripslashes($this->input->post('DOB'))),
            'res_pob' => trim(stripslashes($this->input->post('POB'))),
            'res_nationality' => ucwords(strtolower(trim(stripslashes($this->input->post('Nationality'))))),
            'res_religion' => ucwords(strtolower(trim(stripslashes($this->input->post('Religion'))))),
            'res_gender' => ucwords(strtolower(trim(stripslashes($this->input->post('gender'))))),
            'res_is_pwd' => trim(stripslashes($this->input->post('pwd'))),
            'res_is_deceased' => trim(stripslashes($this->input->post('deceased'))),
            'res_bloodtype' => trim(stripslashes($this->input->post('Bloodtype'))),
            'res_height' => trim(stripslashes($this->input->post('Height'))),
            'res_weight' => trim(stripslashes($this->input->post('Weight'))),
            'res_civil_status' => trim(stripslashes($this->input->post('CivilStatus'))),
            'res_spouse' => trim(stripslashes($this->input->post('SpouseName'))),
            'res_fathers_name' => trim(stripslashes($this->input->post('FathersName'))),
            'res_mothers_name' => trim(stripslashes($this->input->post('MothersName'))),
            'res_photo' => trim(stripslashes($this->input->post('UploadPhoto'))),
            'res_home_ownership' => trim(stripslashes($this->input->post('HomeOwnership'))),
            'res_house_number' => trim(stripslashes($this->input->post('Address'))),
            'res_street' => trim(stripslashes($this->input->post('Street'))),
            'res_purok' => trim(stripslashes($this->input->post('Purok'))),
            'res_barangay' => trim(stripslashes($this->input->post('Barangay'))),
            'res_city' => trim(stripslashes($this->input->post('City'))),
            'res_province' => trim(stripslashes($this->input->post('Province'))),
            'res_region' => trim(stripslashes($this->input->post('Region'))),
            'res_household_id' => trim(stripslashes($this->input->post('Household'))),
            'res_neighbors' => trim(stripslashes($this->input->post('Neighbors'))),
            'res_contact_number' => trim(stripslashes($this->input->post('ContactNumber'))),
            'res_email' => trim(stripslashes($this->input->post('Email'))),
            'res_education' => trim(stripslashes($this->input->post('EducationalAttainment'))),
            'res_employment_status' => trim(stripslashes($this->input->post('EmploymentStatus'))),
            'res_is_dswdnths' => trim(stripslashes($this->input->post('NHTS'))),
            'res_is_4ps' => trim(stripslashes($this->input->post('4Ps'))),
            'res_philhealth_id' => trim(stripslashes($this->input->post('PhilHealth'))),
            'res_philhealth_category' => trim(stripslashes($this->input->post('PhilHealthCategory'))),
            'res_is_pcb' => trim(stripslashes($this->input->post('pcb'))),
        );

        $this->db->where('res_id', $rid);
        $query = $this->db->update('resident', $form_fields);

        if ($query) {
            return true;
        } else {
            return false;
        }
    }

    // edit resident ID
    // delete resident
    public function delete_resident_m($rid) {
        $this->db->where('res_id', $rid);
        $this->db->delete('resident');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    // delete resident END
    // get resident purok
    public function get_res_purok($rid) {

        $getrespurokid = $this->db->query("SELECT * FROM resident WHERE res_id='$rid'");
        $getrespurokidR = $getrespurokid->row();
        $respurokidR = $getrespurokidR->res_purok;
        $query = $this->db->query("SELECT * FROM purok WHERE purok_id='$respurokidR'");

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return false;
        }
    }

    // get resident purok END

}
