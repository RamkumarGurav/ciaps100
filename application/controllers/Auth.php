<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller {
public function index()
{
$this->load->view('welcome_message');
redirect('dashboard');
}

public function login(){


  redirect('dashboard');
}
}