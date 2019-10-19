<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$this->load->model('UserModel','user');
		// print_r($this->user->getUser());
		$data['users'] = $this->user->getUser();
		$this->load->view('userlist',$data);

	}
}
