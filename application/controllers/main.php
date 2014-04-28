<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller { 


	public function	index(){
		$this->load->helper(array('form', 'url'));

		$this->load->library('form_validation');
		$this->load->view('main/htmlheader.html');
		$this->load->view('main/form');
		$this->load->view('main/header');
		$this->load->view('main/counter');
		$this->load->view('main/reviews');
		$this->load->view('main/consult');
		$this->load->view('main/just_another_order_block');
		$this->load->view('main/portfolio');
		$this->load->view('main/howwork');
		$this->load->view('main/question');
		$this->load->view('main/whywe');
		$this->load->view('main/howchoose');
		$this->load->view('main/banner');
		$this->load->view('main/question2');
		$this->load->view('main/footer');
		$this->load->view('main/htmlfooter.html');
	}
	public function order(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->load->library('email');

		$this->form_validation->set_rules('name', 'Имя', 'required|min_length[2]|max_length[16]');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('phone', 'Телефон', 'required|numeric');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('main/htmlheader.html');
			$this->load->view('main/form_php');
			$this->load->view('main/htmlfooter.html');
		}
		else
		{
			$data = array('name' => $this->input->post('name'),
							'email' => $this->input->post('email'),
							'phone' => $this->input->post('phone')
				);

			$config['mailtype'] = 'text';
			// $config['mailpath'] = '/usr/sbin/sendmail';
			// $config['charset'] = 'iso-8859-1';
			// $config['wordwrap'] = FALSE;
			// $config['newline'] = TRUE;

			$this->email->initialize($config);

			$this->email->clear();
		    $this->email->to('semenzuev777@gmail.com, t-z21@mail.ru');
		    $this->email->from('info@t-z21.ru');
		    $this->email->subject('Новая заявка!');
		    $this->email->message("Привет!\nПоступила заявка от\nИмя: ".$data['name']."\nАдрес: ".$data['email']."\nТелефон: ".$data['phone']."");
		    $this->email->send();


			$this->load->view('main/htmlheader.html');
			$this->load->view('main/formsuccess');
			$this->load->view('main/htmlfooter.html');
		}
		
	}

	public function form_php(){
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->load->view('main/htmlheader.html');
			$this->load->view('main/form_php');
			$this->load->view('main/htmlfooter.html');
	}
}
