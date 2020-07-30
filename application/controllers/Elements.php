<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Elements extends CI_Controller {
	public function index()
	{
		$data['title'] = "Elements General - Gentelella Alela!";
		return view('elements.general', $data);
	}
	
	public function media()
	{
		$data['title'] = "Media Gallery - Gentelella Alela!";
		return view('elements.media', $data);
	}
	
	public function typography()
	{
		$data['title'] = "Typography - Gentelella Alela!";
		return view('elements.typography', $data);
	}
	
	public function icons()
	{
		$data['title'] = "Elements Icons - Gentelella Alela!";
		return view('elements.icons', $data);
	}
	
	public function glyphicons()
	{
		$data['title'] = "Glyphicons - Gentelella Alela!";
		return view('elements.glyphicons', $data);
	}
	
	public function widgets()
	{
		$data['title'] = "Widgets - Gentelella Alela!";
		return view('elements.widgets', $data);
	}
	
	public function invoice()
	{
		$data['title'] = "Invoice - Gentelella Alela!";
		return view('elements.invoice', $data);
	}
	
	public function inbox()
	{
		$data['title'] = "Inbox - Gentelella Alela!";
		return view('elements.inbox', $data);
	}
	
	public function calendar()
	{
		$data['title'] = "Calendar - Gentelella Alela!";
		return view('elements.calendar', $data);
	}
}