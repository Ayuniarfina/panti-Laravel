<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\userPanti;

class UserPantiController extends Controller
{
    public function index()
    {
      return view('front.panti.index');
    }

    public function show()
    {
      return view('front.panti.show');
    }

    public function create()
    {
      return view('front.panti.form');
    }

    public function store(Request $request)
    {
      $user_pantis = new userPanti;

      $user_pantis->nama_panti = $request->input('nama_panti');
      $user_pantis->email_panti = $request->input('email_panti');
      $user_pantis->password_panti = bcrypt($request->input('password_panti'));
      $user_pantis->alamat_panti = $request->input('alamat_panti');
      $user_pantis->kondisi_panti = $request->input('kondisi_panti');
      $user_pantis->jml_penghuni = $request->input('jml_penghuni');
      $user_pantis->nama_pemilik = $request->input('nama_pemilik');
      $user_pantis->kontak_panti = $request->input('kontak_panti');

      $user_pantis->save();

      //$user_pantis = userPanti::create(request(['nama_panti', 'email_panti', 'password_panti', 'alamat_panti', 'kondisi_panti', 'jml_penghuni', 'nama_pemilik', 'kondisi_panti', 'kontak_panti']));

      return redirect('/');
    }
}
