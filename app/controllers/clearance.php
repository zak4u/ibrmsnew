<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clearance extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct(); // needed when adding a constructor to a controller
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
        $this->load->model('clearance_r_m', 'clearance_r_m');
        $this->load->model('clearance_b_m', 'clearance_b_m');
        $this->load->model('resident_m', 'resident_m');
    }

    public function clearance_resident() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_list';
        $data['pagename'] = 'Resident Clearance';
        $data['pagesubname'] = 'Barangay Clearance Resquest';

        $data['lists'] = $this->clearance_r_m->list_clearance_r_m();

        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_issue() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_add';
        $data['pagename'] = 'Issue Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_add() {
        $result = $this->clearance_r_m->add_clearance_r_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Clearance successfully added!");
        }

        redirect('clearance/clearance_resident');
    }

    public function clearance_resident_edit($rc_id) {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_edit';
        $data['pagename'] = 'Edit Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';

        $data['lists'] = $this->clearance_r_m->get_clearance_r_m($rc_id);

        $this->load->view('layouts/main', $data);
    }

    public function edit_clearance_resident($rc_id) {
        $result = $this->clearance_r_m->edit_clearance_resident_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Clearance updated!");
        }
        redirect('clearance/clearance_resident');
    }

    public function clearance_resident_print() {
        $data = $this->data;
        $data['main_content'] = 'clearance_resident_print';
        $data['pagename'] = 'Print Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';



        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_delete($rc_id) {
        $result = $this->clearance_r_m->delete_clearance_resident_m($rc_id);
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Clearance deleted!");
        }
        redirect('clearance/clearance_resident');
    }

    /* #################

     * 
     * BUSINESS CLEARANCE     */

    public function clearance_business() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_list';
        $data['pagename'] = 'Business Clearance';
        $data['pagesubname'] = 'Barangay Clearance Resquest';

        $data['lists'] = $this->clearance_b_m->list_clearance_b_m();

        $this->load->view('layouts/main', $data);
    }

    public function clearance_business_issue() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_add';
        $data['pagename'] = 'Issue Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }

    public function clearance_business_add() {
        $result = $this->clearance_b_m->add_clearance_b_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Clearance successfully added!");
        }

        redirect('clearance/clearance_business');
    }

    public function clearance_business_edit($bc_id) {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_edit';
        $data['pagename'] = 'Edit Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';

        $data['lists'] = $this->clearance_b_m->get_clearance_b_m($bc_id);

        $this->load->view('layouts/main', $data);
    }

    public function edit_clearance_business($bc_id) {
        $result = $this->clearance_b_m->edit_clearance_business_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Clearance updated!");
        }
        redirect('clearance/clearance_business');
    }

    public function clearance_business_print() {
        $data = $this->data;
        $data['main_content'] = 'clearance_business_print';
        $data['pagename'] = 'Print Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }

    public function clearance_business_delete($bc_id) {
        $result = $this->clearance_b_m->delete_clearance_business_m($bc_id);
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Clearance deleted!");
        }
        redirect('clearance/clearance_resident');
    }

    public function clearance_reports() {
        $data = $this->data;
        $data['main_content'] = 'clearance_reports';
        $data['pagename'] = 'Clearance Reports';
        $data['pagesubname'] = 'Resident/Business Clearance Resquests Reports';

        $this->load->view('layouts/main', $data);
    }

    public function json_search_country() {
        $query = $this->resident_m->search_resident();
        $data = array();
        foreach ($query as $key => $value) {
            $data[] = array('res_id' => $value->res_id, 'res_lastname' => $value->res_lastname);
        }
        echo json_encode($data);
    }

}
