<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
 * @package  : BELAJAR PEMROGRAMAN ONLINE.
 * @author   : Badriyatul Muawannah<annahasyim97@gmail.com>
 * @since    : 2017
 * @license  : https://muawannah.com/portofolio/belajar-online/
  */
class Login extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Login - 
			');
			$this->load->view('frontend/layout/user/login', $data);
	}
}