<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Judicial extends CI_Controller {
    public function index()	{
        
        $data['main_content'] = 'judicial_list';
		$data['pagename'] = 'Judicial Cases';
		$data['pagesubname'] = 'List of Barangay Judicial Cases';

		$this->load->view('layouts/main',$data);
    }
    public function judicial_cases()	{
        
        $data['main_content'] = 'judicial_resident_cases';
		$data['pagename'] = 'Resident Judicial Cases';
		$data['pagesubname'] = 'Barangay Judicial Cases List';

		$this->load->view('layouts/main',$data);
    }
    public function kp07add()	{
        
        $data['main_content'] = 'judicial_kp07add';
		$data['pagename'] = 'Add New Case';
		$data['pagesubname'] = 'KP Form No. 07 - Complaint';

		$this->load->view('layouts/main',$data);
    }
    public function kp07edit()	{
        
        $data['main_content'] = 'judicial_kp07edit';
		$data['pagename'] = 'Edit Case';
		$data['pagesubname'] = 'KP Form No. 07 - Complaint';

		$this->load->view('layouts/main',$data);
    }
    
    public function kp08add()	{
        
        $data['main_content'] = 'judicial_kp08add';
		$data['pagename'] = 'Add New Case';
		$data['pagesubname'] = 'KP Form No. 08 - Notice of Hearing';

		$this->load->view('layouts/main',$data);
    }
    public function kp08edit()	{
        
        $data['main_content'] = 'judicial_kp08edit';
		$data['pagename'] = 'Edit Case';
		$data['pagesubname'] = 'KP Form No. 08 - Notice of Hearing';

		$this->load->view('layouts/main',$data);
    }
    
    public function kp09add()	{
        
        $data['main_content'] = 'judicial_kp09add';
		$data['pagename'] = 'Add New Case';
		$data['pagesubname'] = 'KP Form No. 09 - Summons';

		$this->load->view('layouts/main',$data);
    }
    public function kp09edit()	{
        
        $data['main_content'] = 'judicial_kp09edit';
		$data['pagename'] = 'Edit Case';
		$data['pagesubname'] = 'KP Form No. 09 - Summons';

		$this->load->view('layouts/main',$data);
    }
    
    public function reports()	{
        
        $data['main_content'] = 'judicial_reports';
		$data['pagename'] = 'Judicial Reports';
		$data['pagesubname'] = '';

		$this->load->view('layouts/main',$data);
    }
}
