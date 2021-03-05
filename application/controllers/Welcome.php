<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello($name, $surname)
	{
		$data = [
			'dept' => 'Electrical and Computer Engineering',
			'name' => $name,
			'surname' => $surname
		];
		$this->load->view('hello_message', $data);
	}
	public function multiply($num1, $num2)
	{
		$data = [
			'num1' => $num1,
			'num2' => $num2
		];
		$this->load->view('math', $data);
	}
}
