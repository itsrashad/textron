<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

	/*
	* Ajax Controller
	* For CRUD in json
	* @Ahsan Zahid Chowdhury
	* @azc.pavel@gmail.com
	* @+880 1677 533818
	* @2014-06-13
	* Access Public
	*/

	public function __construct()
	{
		parent::__construct();
		$this->load->library('custom');
		$this->load->model('ajax_model');
	}
	
	
	public function update_assessment($user_id)
	{
		if($session_user = $this->session->userdata('login'))
		{
			if($user_id != $session_user['user_id'])
				return;
			
			$update_data = array(
				'AssSc1' => $this->input->post('AssSc1',1),
				'AssSc2' => $this->input->post('AssSc2',1),
				'AssSc3' => $this->input->post('AssSc3',1),
				'AssSc4' => $this->input->post('AssSc4',1),
				'AssSc5' => $this->input->post('AssSc5',1),
				'AssSc6' => $this->input->post('AssSc6',1),
				'AssSc7' => $this->input->post('AssSc7',1),
				'AssSc8' => $this->input->post('AssSc8',1),
				'AssSc9' => $this->input->post('AssSc9',1),
				'AssCo1' => $this->input->post('AssCo1',1),
				'AssCo2' => $this->input->post('AssCo2',1),
				'AssCo3' => $this->input->post('AssCo3',1),
				'AssCo4' => $this->input->post('AssCo4',1),
				'AssCo5' => $this->input->post('AssCo5',1),
				'AssCo6' => $this->input->post('AssCo6',1),
				'AssCo7' => $this->input->post('AssCo7',1),
				'AssCo8' => $this->input->post('AssCo8',1),
				'AssCo9' => $this->input->post('AssCo9',1),
				'AssCo10' => $this->input->post('AssCo10',1),
				'AssCo11' => $this->input->post('AssCo11',1),
				'AssCo12' => $this->input->post('AssCo12',1)
				);

			$this->ajax_model->update_query('assessment_details',"user_id = '$session_user[user_id]'",$update_data);
			echo 1;
			return;
		}

		echo 0;
	}

	function add_new_development()
	{
		if($session_user = $this->session->userdata('login'))
		{
			
			$insert_data = array(
				'user_id' => $session_user['user_id'],
				'cat_name' => $this->input->post('cat_name',1),
				'type' => $this->input->post('type',1),
				'item_name' => $this->input->post('item_name',1),
				'goal_date' => $this->input->post('goal_date',1)
				);
			$this->ajax_model->insert_query('development_details',$insert_data);
		}
	}

	function remove_development($id)
	{
		if($session_user = $this->session->userdata('login'))
		{	
			
			$this->ajax_model->delete_query('development_details',"id = '$id' AND user_id = '$session_user[user_id]'");
		}
	}

	function new_development($num,$sub_num)
	{
		$data['new_dev_id']=$num;
		$data['new_dev_sub_id']=$sub_num;
		echo $this->load->view('user/new_dev_part',$data);
	}

	function new_development_item($num,$sub_num,$type)
	{		
		$data['new_dev_id']=$num;
		$data['new_dev_sub_id']=$sub_num;
		if($type == 'Act')
			echo $this->load->view('user/new_act_item_part',$data);
		else
			echo $this->load->view('user/new_tra_item_part',$data);
	}

}