<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/*
	* Main Controller
	* For View,Search options
	* @Ahsan Zahid Chowdhury
	* @azc.pavel@gmail.com
	* @+880 1677 533818
	* @2014-06-07
	* Access Public
	*/

	public function __construct()
	{
		parent::__construct();
		$this->load->library('custom');
	}
	
	public function index()
	{
		$data['common'] = '';
		$this->load->view('home',$data);
	}

	public function MyDevPlan()
	{
		$data['common'] = '';
		$this->load->view('user/development_plan',$data);
	}

	public function Login()
	{
		$data['common'] = '';
		$this->load->view('login',$data);
	}

	public function NewReg()
	{
		$data['common'] = '';
		$this->load->view('register',$data);
	}

	public function error_404()
	{
		$this->load->view('error_404');
	}


}
