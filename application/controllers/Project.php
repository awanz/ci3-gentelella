<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {
	public function index()
	{
		$data['title'] = "Project - Gentelella Alela!";
		return view('project.index', $data);
	}
	
	public function detail()
	{
		$data['title'] = "Project Detail - Gentelella Alela!";
		return view('project.detail', $data);
	}
}