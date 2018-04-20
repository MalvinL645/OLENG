<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class awal extends CI_Controller {
        public function index() {
        	$data['title'] = ucfirst('admin');
        	
        	$this->load->view('templates/header', $data);
        	$this->load->view('templates/navbar', $data);
        	$this->load->view('Index', $data);
        }
}