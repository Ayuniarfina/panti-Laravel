<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\userPanti;

class UserPantiController extends Controller
{
    public function index()
    {
      $user_pantis = userPanti::all();

      return view('front. panti.index', compact('user_pantis'));
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
      $this->validate($request, [
        'nama_panti' => 'required|string|max:255',
        'email_panti' => 'required|string|email|max:255|unique:user_pantis',
        'password' => 'required|string|min:6|confirmed',
        'alamat_panti' => 'required|string',
        'kondisi_panti' => 'required|string',
        'jml_penghuni' => 'required|min:1|numeric',
        'nama_pemilik' => 'required|string',
        'kontak_panti' => 'required|string',
        'foto' => 'required|image|mimes:jpeg, png, jpg, gif, svg',
      ]);

	    $user_pantis = new userPanti;

      $user_pantis->nama_panti = $request->input('nama_panti');
      $user_pantis->email_panti = $request->input('email_panti');
      $user_pantis->password_panti = bcrypt($request->input('password_panti'));
      $user_pantis->alamat_panti = $request->input('alamat_panti');
      $user_pantis->kondisi_panti = $request->input('kondisi_panti');
      $user_pantis->jml_penghuni = $request->input('jml_penghuni');
      $user_pantis->nama_pemilik = $request->input('nama_pemilik');
      $user_pantis->kontak_panti = $request->input('kontak_panti');
      $user_pantis->foto = $request->input('image');

      $user_pantis->save();

      $file = $user_pantis->id . '.' .
        $request->file('foto')->getClientOriginalxtension();

      $request->file('foto')->move(
        base_path() . '/public/images/panti/', $fileName);

      //$user_pantis->foto = $fileName;


      //$user_pantis = userPanti::create(request(['nama_panti', 'email_panti', 'password_panti', 'alamat_panti', 'kondisi_panti', 'jml_penghuni', 'nama_pemilik', 'kondisi_panti', 'kontak_panti']));

      return redirect('/');
    }
}
