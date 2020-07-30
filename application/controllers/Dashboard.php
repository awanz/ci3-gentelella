<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$data['title'] = "Dashboard - Gentelella Alela!";
		return view('dashboard', $data);
	}

	public function v2()
	{
		$data['title'] = "Dashboard 2 - Gentelella Alela!";
		return view('dashboard_v2', $data);
	}

	public function v3()
	{
		$data['title'] = "Dashboard 3 - Gentelella Alela!";
		return view('dashboard_v3', $data);
	}
}