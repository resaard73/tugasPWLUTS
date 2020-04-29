<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['contents'] = 'admin/dashboard';
		$this->load->view('templates/index', $data);
	}
	public function materi()
	{
		$data['contents'] = 'admin/materi';
		$this->load->view('templates/index', $data);
	}
	public function tugas()
	{
		$data['contents'] = 'admin/tugas';
		$this->load->view('templates/index', $data);
	}
	public function ukk()
	{
		$data['contents'] = 'admin/ukk';
		$this->load->view('templates/index', $data);
	}
	public function uts()
	{
		$data['contents'] = 'admin/uts';
		$this->load->view('templates/index', $data);
	}
	public function uas()
	{
		$data['contents'] = 'admin/uas';
		$this->load->view('templates/index', $data);
	}
	
}
