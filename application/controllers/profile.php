<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class profile extends CI_Controller {
        public function index() {
        	$data['title'] = ucfirst('admin');
        	
        	$this->load->view('templates/header');
        	$this->load->view('templates/navbar');
        	$this->load->view('Profilepage');
        }
}