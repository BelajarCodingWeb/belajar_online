<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Profile extends CI_Controller
{

  function index()
  {
    $this->load->view('part/header');
    $this->load->view('layout/profile');
    $this->load->view('part/footer');
  }
}
