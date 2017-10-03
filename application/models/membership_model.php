<?php

class Membership_model extends CI_Model
{
	function validate()
	{

		$this->db->where('Username', $this->input->post('username'));
		$this->db->where('Password', $this->input->post('password'));
		$query = $this->db->get('users');

		if($query->num_rows == 1)
		{
			return true;
		}
	}

	function create_user()
	{
		 
		$new_user_insert_data = array
		(
			'FirstName' => $this->input->post('first_name'),
			'Surname' => $this->input->post('surname'),
			'Email' => $this->input->post('email'),
			'Phone' => $this->input->post('phone'),
			'Username' => $this->input->post('username'),
			'Password' => $this->input->post('password'),
		);

		$insert = $this->db->insert('users', $new_user_insert_data);
		return $insert;
	}

	function create_booking()
	{
		$new_booking_insert = array
		(
			'Origin' => $this->input->post('origin'),
			'Destination' => $this->input->post('destination'),
			'D_Date' => $this->input->post('d_date'),
			'R_Date' => $this->input->post('r_date'),
			'Adults' => $this->input->post('adults'),
			'Children' => $this->input->post('children'),
			'UserEmail' => $this->input->post('email')
		);

		$insert = $this->db->insert('flights', $new_booking_insert);
		return $insert;

	}

	function fetch_data()
	{
		$query = $this->db->get('users');
		return $query;
	}

	function flight_data()
	{
		$query = $this->db->get('flights');
		return $query;
	}
}


?>