<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Times extends CI_Controller {

	public function index(){
		$this->main();
	}

	public function main()
	{
		$this->load->helper('date');
		$dateFormat = "%F %d, %Y";
		$timeFormat = "%h:%i %A";
		$data['timeFormat'] = $timeFormat;
		$data['dateFormat'] = $dateFormat;
		$this->load->view('time', $data);
	}

}
