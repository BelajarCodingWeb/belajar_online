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
			// $this->load->view('frontend/layout/about/senyumlah');
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

	//Halaman To You
	public function untukmu()
	{
		$data = array('title' => 'Untukmu',
		  			'untukmu' => TRUE);

			$this->load->view('frontend/part/header', $data);
			$this->load->view('frontend/layout/about/untukmu');
			$this->load->view('frontend/part/footer');
	}

	//Halaman Hai
	public function hai()
	{
		$data = array('title' => 'Hai Anna',
		  			'hai' => TRUE);

			$this->load->view('frontend/part/header', $data);
			$this->load->view('frontend/layout/about/hai');
			$this->load->view('frontend/part/footer');
	}

	//Halaman Senyumlah
	public function Senyumlah()
	{
		$data = array('title' => 'Hai Anna',
		  			'senyumlah' => TRUE);

			$this->load->view('frontend/part/header');
			$this->load->view('frontend/layout/about/senyumlah', $data);
			$this->load->view('frontend/part/footer');
	}

	//Halaman doa
	public function doa()
	{
		$data = array('title' => 'Hai Anna',
		  			'doa' => TRUE);

			// $this->load->view('frontend/part/header');
			$this->load->view('frontend/layout/about/doa', $data);
			// $this->load->view('frontend/part/footer');
	}
}