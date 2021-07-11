<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'data' => 'hello'
		];
		return view('hello/world', $data);
	}
}
