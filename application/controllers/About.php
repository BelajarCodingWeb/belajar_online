<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /*
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
  */
class About extends CI_Controller {
	//Halaman About
	public function index()
	{
		$data = array('title' => 'About',
		  			'about' => TRUE);

			$this->load->view('frontend/part/header', $data);
			$this->load->view('frontend/layout/about/data');
			$this->load->view('frontend/part/footer');
	}

	//Halaman Jobs
	public function jobs()
	{
		$data = array('title' => 'Jobs',
		  			'jobs' => TRUE);

			$this->load->view('frontend/part/header', $data);
			$this->load->view('frontend/layout/about/jobs');
			$this->load->view('frontend/part/footer');
	}
}