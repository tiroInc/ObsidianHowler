<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function validate_credentials()
	{
		/*$this->load->model('membership_model');
		$query = $this->membership_model->validate();*/

		/*if($query) //if credentials are validated
		{
			$data = array
			(
				'Username' => $this->input->post('username'),
				'is_logged_in' => true
			);

			$this->session->set_userdata($data);
			redirect('home');
		}
		else //incorrect creds
		{
			$this->index();
		}*/
		
			$this->load->view('template/header');
			$this->load->view('template/secondHeader');
			$this->load->view('home');
			$this->load->view('template/footer');
	}
	
	public function register()
	{
		$this->load->view('template/header');
		$this->load->view('register');
		$this->load->view('template/footer');
	}

	public function create_user()
	{
		
			$this->load->model('membership_model');

			if($query = $this->membership_model->create_user())
			{
				$this->load->view('template/header');
				$this->load->view('login');
				$this->load->view('template/footer');
			}

			else
			{
				$this->load->view('template/header');
				$this->load->view('template/secondHeader');
				$this->load->view('register');
				$this->load->view('template/footer');
			}
	}

	public function create_booking()
	{
			$this->load->model('membership_model');

			if($query = $this->membership_model->create_booking())
			{
				$this->load->view('template/header');
				$this->load->view('template/secondHeader');
				$this->load->view('home');
				$this->load->view('template/footer');
			}
	}

	public function home()
	{
		$this->load->view('template/header');
		$this->load->view('template/secondHeader');
		$this->load->view('home');
		$this->load->view('template/footer');
	}

	public function contact()
	{
		$this->load->view('template/header');
		$this->load->view('template/secondHeader');
		$this->load->view('contact');
		$this->load->view('template/footer');
	}

	public function offers()
	{
		$this->load->view('template/header');
		$this->load->view('template/secondHeader');
		$this->load->view('offers');
		$this->load->view('template/footer');
	}

	public function profile()
	{
		$this->load->model("membership_model");
		$users["fetch_data"] = $this->membership_model->fetch_data();
		$flights["flight_data"] = $this->membership_model->flight_data();
		$data = $flights + $users;
		$this->load->view('template/header');
		$this->load->view('template/secondHeader');
		$this->load->view('profile', $data);
		$this->load->view('template/footer');
	}
}
