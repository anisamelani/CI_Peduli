<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
		$this->load->view('home');
	}
	
	public function kontak()
	{
		$this->load->view('kontak');
	}
	
	public function kamar(){
		$this->load->view('kamar');
	}
	public function detail(){
		$this->load->view('detail');
	}
}
