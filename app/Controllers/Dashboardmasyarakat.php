<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Dashboardmasyarakat extends BaseController
{
	public function index()
	{
		$data['intro']='<div class="jumbotron mt-5">
		<h1>Hallo, '.session()->get('username').'</h1>
		<p>Selamat datang di pengaduan masyarakat desa cigarukgak,silakan isi pengaduan ini !</p>
	  </div>';
		return view ('Masyarakat/Dashboard', $data);
	}
}
