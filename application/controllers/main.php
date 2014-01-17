<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller { 

	public function	index(){
		$this->load->view('main/htmlheader.html');
		$this->load->view('main/header');
		$this->load->view('main/counter');
		$this->load->view('main/reviews');
		$this->load->view('main/consult');
		$this->load->view('main/just_another_order_block');
		$this->load->view('main/portfolio');
		$this->load->view('main/htmlfooter.html');
	}
}