<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 /*
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
  */
class Daftar extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Daftar - Belajar Coding Website',
		  			'home' => True);

			$this->load->view('frontend/part/header');
			$this->load->view('frontend/layout/daftar/data');
			$this->load->view('frontend/part/footer');
	}
}
