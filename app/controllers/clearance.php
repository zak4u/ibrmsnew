<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Clearance extends CI_Controller {

    public function clearance_resident() {

        $data['main_content'] = 'clearance_resident_list';
        $data['pagename'] = 'Resident Clearance';
        $data['pagesubname'] = 'Barangay Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }

    public function clearance_resident_issue() {

        $data['main_content'] = 'clearance_resident_issue';
        $data['pagename'] = 'Issue Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }
    public function clearance_resident_edit() {

        $data['main_content'] = 'clearance_resident_edit';
        $data['pagename'] = 'Edit Clearance';
        $data['pagesubname'] = 'Resident Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }

    public function clearance_business() {

        $data['main_content'] = 'clearance_business_list';
        $data['pagename'] = 'Business Clearance';
        $data['pagesubname'] = 'Barangay Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }
    
    public function clearance_business_issue() {

        $data['main_content'] = 'clearance_business_issue';
        $data['pagename'] = 'Issue Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }
    public function clearance_business_edit() {

        $data['main_content'] = 'clearance_business_edit';
        $data['pagename'] = 'Edit Clearance';
        $data['pagesubname'] = 'Business Clearance Resquest';

        $this->load->view('layouts/main', $data);
    }

    public function clearance_reports() {

        $data['main_content'] = 'clearance_reports';
        $data['pagename'] = 'Clearance Reports';
        $data['pagesubname'] = 'Resident/Business Clearance Resquests Reports';

        $this->load->view('layouts/main', $data);
    }

}
