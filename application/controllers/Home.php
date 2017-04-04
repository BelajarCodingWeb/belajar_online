<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @package  : Belajar Coding Web.
 * @author   : Mohammad Yazidinni'am <myazidinniam@gmail.com>
 * @since    : 2017
 * @license  : http://localhost/belajar_online
 */
class Home extends CI_Controller {
	public function index()
	{
		$data = array('title' => 'Belajar Coding Website',
		  			'dashboard' => True);

			$this->load->view('frontend/part/header');
			$this->load->view('frontend/part/footer');
	}
}
