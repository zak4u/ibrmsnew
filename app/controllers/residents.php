<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Residents extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct(); // needed when adding a constructor to a controller
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
        $this->load->model('resident_m', 'resident_m');
        $this->load->model('brgy_m', 'brgy_m');
        $this->load->model('purok_m', 'purok_m');
        $this->load->model('household_m', 'household_m');
        $this->load->model('kp07_m', 'kp07_m');
    }

    public function index() {
        $data = $this->data;
        $data['main_content'] = 'resident_list';
        $data['pagename'] = 'Residents';
        $data['pagesubname'] = 'List of Barangay Residents';

        $data['lists'] = $this->resident_m->list_resident_m();
        
         

        $this->load->view('layouts/main', $data);
    }

    public function add() {
        $data = $this->data;
        $data['main_content'] = 'resident_add';
        $data['pagename'] = 'Add Resident Record';
        $data['pagesubname'] = 'New Resident Profile';

        $data['brgy'] = $this->brgy_m->get_brgy_m();
        $data['listpurok'] = $this->purok_m->list_purok_m();
        $data['listhh'] = $this->household_m->list_household_m();

        $this->load->view('layouts/main', $data);
    }

    public function add_resident() {

        if ($_FILES['UploadPhoto']['size'] < 528385) {

            $filename = $this->input->post('res_id_num') . '_' . $this->input->post('LastName') . '_' . $this->input->post('FirstName').time();
            $url = './resident-photo/' . $filename . '.jpg';

            $tmp_name = $_FILES['UploadPhoto']['tmp_name'];
            move_uploaded_file($tmp_name, "$url");
        } else {
            redirect('residents/add');
        }

        $result = $this->resident_m->add_resident_m($url);
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Resident successfully added!");
        }

        redirect('residents');
    }

    public function view($rid) {
        $data = $this->data;
        $data['main_content'] = 'resident_view';
        $data['pagename'] = 'View Resident Record';
        $data['pagesubname'] = 'View Resident Profile';

        $data['lists'] = $this->resident_m->get_resident_m($rid);
        $data['respurok'] = $this->resident_m->get_res_purok($rid);
        $data['rescase'] = $this->kp07_m->get_res_case($rid);


        $this->load->view('layouts/main', $data);
    }

    public function edit($rid) {
        $data = $this->data;
        $data['main_content'] = 'resident_edit';
        $data['pagename'] = 'Edit Resident Record';
        $data['pagesubname'] = 'Edit Resident Profile';

        $data['lists'] = $this->resident_m->get_resident_m($rid);
        $data['listpurok'] = $this->purok_m->list_purok_m();
        $data['listhh'] = $this->household_m->list_household_m();

        $this->load->view('layouts/main', $data);
    }

    public function edit_resident($rid) {
        $result = $this->resident_m->edit_resident_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Resident updated!");
        }
        redirect('residents');
    }

    public function edit_resident_photo($rid) {

        if ($_FILES['UploadPhoto']['size'] < 528385) {

            $filename = $this->input->post('res_id_num') . '_' . $this->input->post('LastName') . '_' . $this->input->post('FirstName').time();
            $url = './resident-photo/' . $filename . '.jpg';

            $tmp_name = $_FILES['UploadPhoto']['tmp_name'];
            move_uploaded_file($tmp_name, "$url");
        } else {
            redirect('residents/edit');
        }
        $result = $this->resident_m->edit_resident_photo_m($rid,$url);
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Resident updated!");
        }
        redirect('residents');
    }

    public function delete($rid) {
        $result = $this->resident_m->delete_resident_m($rid);
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Resident removed!");
        }
        redirect('residents');
    }

    public function resident_reports() {
        $data = $this->data;
        $data['main_content'] = 'resident_reports';
        $data['pagename'] = 'Residents Reports';
        $data['pagesubname'] = '';

        $this->load->view('layouts/main', $data);
    }

}
