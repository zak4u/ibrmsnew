<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Household extends CI_Controller {

    var $data;

    function __construct() {
        parent::__construct(); // needed when adding a constructor to a controller
        //page_specific
        $this->data = array(
            'head_content' => 'layouts/page_specific/blank',
            'foot_content' => 'layouts/page_specific/blank'
        );
        // $this->data can be accessed from anywhere in the controller.
        $this->load->model('household_m', 'household_m');
    }

    public function index() {

        $data = $this->data;


        $data['main_content'] = 'household_list';
        $data['pagename'] = 'Household';
        $data['pagesubname'] = '';

        $data['lists'] = $this->household_m->list_household_m();

        $this->load->view('layouts/main', $data);
    }

    public function add() {

        $data = $this->data;


        $data['main_content'] = 'household_add';
        $data['pagename'] = 'Add Household';
        $data['pagesubname'] = '';

        $this->load->view('layouts/main', $data);
    }

    public function add_household() {
        $result = $this->household_m->add_household_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Household successfully added!");
        }

        redirect('household');
    }

    public function edit($hid) {
        $data = $this->data;

        $data['main_content'] = 'household_edit';
        $data['pagename'] = 'Edit Household';
        $data['pagesubname'] = '';

        $data['lists'] = $this->household_m->get_household_m($hid);

        $this->load->view('layouts/main', $data);
    }

    public function edit_household($hid) {
        $result = $this->household_m->edit_household_m();
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Household updated!");
        }
        redirect('household');
    }

    public function delete($hid) {
        $result = $this->household_m->delete_household_m($hid);
        if ($result == FALSE) {
            $this->session->set_flashdata('msg', "Failed!");
        } else {
            $this->session->set_flashdata('msg', "Household removed!");
        }
        redirect('household');
    }

}
