<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {
	public function index()
	{
		$data['title'] = "Form - Gentelella Alela";
		return view('form.index', $data);
	}
	
	public function advanced()
	{
		$data['title'] = "Form Advanced - Gentelella Alela!";
		return view('form.advanced', $data);
	}
	
	public function validation()
	{
		$data['title'] = "Form Advanced - Gentelella Alela!";
		return view('form.validation', $data);
	}
	
	public function wizard()
	{
		$data['title'] = "Form Advanced - Gentelella Alela!";
		return view('form.wizard', $data);
	}
	
	public function upload()
	{
		$data['title'] = "Form Advanced - Gentelella Alela!";
		return view('form.upload', $data);
	}
	
	public function buttons()
	{
		$data['title'] = "Form Advanced - Gentelella Alela!";
		return view('form.buttons', $data);
	}
}