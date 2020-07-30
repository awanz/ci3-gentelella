<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller {
	public function page_403()
	{
		$data['title'] = "403 - Gentelella Alela!";
		return view('pages.403', $data);
	}

	public function page_404()
	{
		$data['title'] = "404 - Gentelella Alela!";
		return view('pages.404', $data);
	}

	public function page_500()
	{
		$data['title'] = "500 - Gentelella Alela!";
		return view('pages.500', $data);
	}

	public function plain_page()
	{
		$data['title'] = "Plain Page - Gentelella Alela!";
		return view('pages.plain_pages', $data);
	}

	public function pricing_tables()
	{
		$data['title'] = "Pricing Tables - Gentelella Alela!";
		return view('pages.pricing_tables', $data);
	}

	public function ecommerce()
	{
		$data['title'] = "E-commerce - Gentelella Alela!";
		return view('pages.ecommerce', $data);
	}
}