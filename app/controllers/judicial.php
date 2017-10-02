<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judicial extends CI_Controller {
    public function index()	{
        
        $data['main_content'] = 'judicial_list';
		$data['pagename'] = 'Judicial Cases';
		$data['pagesubname'] = 'List of Barangay Judicial Cases';

		$this->load->view('layouts/main',$data);
    }
    public function add()	{
        
        $data['main_content'] = 'judicial_add';
		$data['pagename'] = 'Add New Case';
		$data['pagesubname'] = '';

		$this->load->view('layouts/main',$data);
    }
    public function view()	{
        
        $data['main_content'] = 'resident_view';
		$data['pagename'] = 'View Resident Record';
		$data['pagesubname'] = 'View Resident Profile';

		$this->load->view('layouts/main',$data);
    }
    public function edit()	{
        
        $data['main_content'] = 'resident_edit';
		$data['pagename'] = 'Edit Resident Record';
		$data['pagesubname'] = 'Edit Resident Profile';

		$this->load->view('layouts/main',$data);
    }

    public function clearance()	{
        
        $data['main_content'] = 'resident_clearance';
		$data['pagename'] = 'Clearance';
		$data['pagesubname'] = 'Barangay Clearance Resquest';

		$this->load->view('layouts/main',$data);
    }
    public function issue_clearance()	{
        
        $data['main_content'] = 'resident_clearance_issue';
		$data['pagename'] = 'Clearance';
		$data['pagesubname'] = 'Barangay Clearance Resquest';

		$this->load->view('layouts/main',$data);
    }
    public function reports()	{
        
        $data['main_content'] = 'resident_reports';
		$data['pagename'] = 'Reports';
		$data['pagesubname'] = '';

		$this->load->view('layouts/main',$data);
    }
}
