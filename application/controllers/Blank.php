<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller {
	public function index()
	{
		$data['title'] = "Blank - Gentelella Alela!";
		return view('blank', $data);
	}
	
	public function full()
	{
		$data['title'] = "Blank Full - Gentelella Alela!";
		return view('blank_full', $data);
	}
}