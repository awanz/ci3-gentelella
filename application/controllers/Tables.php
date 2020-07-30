<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tables extends CI_Controller {
	public function index()
	{
		$data['title'] = "Tables - Gentelella Alela!";
		return view('tables.index', $data);
	}
    
    public function dynamic()
	{
		$data['title'] = "Tables Dynamic - Gentelella Alela!";
		return view('tables.dynamic', $data);
	}
}