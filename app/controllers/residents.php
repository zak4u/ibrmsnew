<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residents extends CI_Controller {
    public function index()	{
        
        $data['main_content'] = 'resident_list';
		$data['pagename'] = 'Residents';
		$data['pagesubname'] = 'List of Barangay Residents';

		$this->load->view('layouts/main',$data);
    }
    public function add()	{
        
        $data['main_content'] = 'resident_add';
		$data['pagename'] = 'Add Resident Record';
		$data['pagesubname'] = 'New Resident Profile';

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
    public function reports()	{
        
        $data['main_content'] = 'resident_reports';
		$data['pagename'] = 'Residents Reports';
		$data['pagesubname'] = '';

		$this->load->view('layouts/main',$data);
    }
}
