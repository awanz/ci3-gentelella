<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	public function index()
	{
		$data['title'] = "Profile - Gentelella Alela!";
		return view('profile.index', $data);
	}
	
	public function contacts()
	{
		$data['title'] = "Contacts - Gentelella Alela!";
		return view('profile.contacts', $data);
	}
}