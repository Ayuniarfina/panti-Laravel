<?php

namespace App\Http\Controllers;

use App\donasi;
use Illuminate\Http\Request;

class donasiController extends Controller
{
	public function show($id)
	{
		return view('donasi.store', ['donasi_uang' => Donasi_uang::findOrFail($id)]);
	}
}
