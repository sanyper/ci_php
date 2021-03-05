<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class My_controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//$this->load->database(); การเขียนแบบ manual ถ้าจะให้ load auto ก็ไปใน config->autoload.php

		$this->load->model('user_model');

		$this->load->helper('url');

	}

	public function index()
	{


		$data = $this->user_model->get_address(10);

		$this->load->view('address_view', $data);
	}

	public function form()
	{
		$this->load->view('form');
	}

	public function insert()
	{
		// Load User_model.php
		$this->load->model('user_model');

		// returns all POST items with XSS filter
		$submit= $this->input->post(NULL, TRUE);
		$data = array(
			'Name'		=>	$submit['Name'],
			'Surname'	=>	$submit['Surname'],
			'Email'	    =>	$submit['Email'],
			'Phone'	    =>	$submit['Phone'],
			'Country'	=>	$submit['Country']
		);

		// call insert_data() method
		if ( $this->user_model->insert_data($data) )
			$data['insert_result'] = "Insert data successfully!";
		else
			$data['insert_result'] = "Something wrong!";

		// Load insert_result.php
		$this->load->view('insert_result', $data);
		//var_dump($data);
	}

	public function update($id)
	{
		$data = $this->user_model->get_1address($id);

		if ( ! $this->input->post('submit') ) {
			$this->load->view('update_form',$data);
		} else {
			$submit= $this->input->post(NULL, TRUE);
			$data = array(
				'Name'		=>	$submit['Name'],
				'Surname'	=>	$submit['Surname'],
				'Email'	    =>	$submit['Email'],
				'Phone'	    =>	$submit['Phone'],
				'Country'	=>	$submit['Country']
			);
			$this->user_model->update_data($id,$data);
			redirect('my_controller');
		}
	}

	public function delete($id)
	{
		$this->user_model->delete_data($id);
		redirect('my_controller');
	}

	public function search()
	{
		$this->load->view('search_form');
	}

	public function search_result()
	{
		// returns all POST items with XSS filter
		$submit = $this->input->post(NULL, TRUE);

		$data = $this->user_model->search_data($submit['Name'], $submit['Surname']);

		// Load address_view.php
		$this->load->view('address_view', $data);
	}

}
