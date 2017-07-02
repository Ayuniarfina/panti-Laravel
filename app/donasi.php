<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donasi extends Model
{
    public function store(Request $request)
	{
		$donasi_uang = new donasi_uang
		$donasi_uang->nama = $request->nama;
		$donasi_uang->email = $request->email;
		$donasi_uang->nomor_hp = $request->nomor_hp;
		$donasi_uang->Jumlah = $request->Jumlah;
		$donasi_uang->save();
	}
}
