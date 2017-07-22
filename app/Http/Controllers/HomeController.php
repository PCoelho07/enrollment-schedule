<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
	public function index() {
		return view('classes');
	}

	public function statistics() {
		return view('statistics');
	}
}
