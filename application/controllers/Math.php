<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Math extends CI_Controller
{
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function multiply($num1, $num2)
	{
		$data = array(
			'num1' => $num1,
			'num2' => $num2,
			'result' => $num1 * $num2
		);
		$this->load->view('math_header.php');
		$this->load->view('math.php', $data);
		$this->load->view('math_footer.php');
	}
	public function plus($num1, $num2)
	{
		$data = array(
			'num1' => $num1,
			'num2' => $num2,
			'result' => $num1 + $num2
		);
		$this->load->view('math_header.php');
		$this->load->view('plus.php', $data);
		$this->load->view('math_footer.php');
	}
}
