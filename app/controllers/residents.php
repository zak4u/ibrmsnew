<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Residents extends CI_Controller {
	public function index()	{
        
        $data['main_content'] = 'resident_list';
		$data['pagename'] = 'Residents';
		$data['pagesubname'] = 'List of Barangay Residents';

		$this->load->view('layouts/main',$data);
	}

    public function clearance()	{
        
        $data['main_content'] = 'resident_clearance';
		$data['pagename'] = 'Clearance';
		$data['pagesubname'] = 'Barangay Clearance Resquest';

		$this->load->view('layouts/main',$data);
	}
}
