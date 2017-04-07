<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
  */
class Dashboard extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Admin Belajar Coding Website',
		  			'dashboard' => True);

			$this->load->view('backend/part/header');
			$this->load->view('backend/part/sidebar');
			$this->load->view('backend/part/footer');
		
	}
}
