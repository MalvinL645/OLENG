<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class register extends CI_Controller {
        public function index() {
        	$data['title'] = ucfirst('admin');
        	
        	$this->load->helper('url');
        	$this->load->view('register');
        }
}