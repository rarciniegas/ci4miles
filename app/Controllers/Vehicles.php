<?php namespace App\Controllers;

class Vehicles extends BaseController
{
	public function index()
	{
		$data = [];
		helper(['form']);




		echo view('templates/header', $data);
		echo view('vehicles/login');
		echo view('templates/footer');
	}

	//--------------------------------------------------------------------

}
