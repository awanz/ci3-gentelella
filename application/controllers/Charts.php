<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Charts extends CI_Controller {
	public function index()
	{
		$data['title'] = "ChartJS - Gentelella Alela!";
		return view('charts.index', $data);
	}
    
    public function v2()
	{
		$data['title'] = "ChartJS v2 - Gentelella Alela!";
		return view('charts.chartjs2', $data);
	}
    
    public function moris()
	{
		$data['title'] = "Moris - Gentelella Alela!";
		return view('charts.moris', $data);
	}
    
    public function echarts()
	{
		$data['title'] = "E-charts - Gentelella Alela!";
		return view('charts.echart', $data);
	}
    
    public function other()
	{
		$data['title'] = "Other Charts - Gentelella Alela!";
		return view('charts.other', $data);
	}
}