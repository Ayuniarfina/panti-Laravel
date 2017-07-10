<?php

namespace App\Http\Controllers\Auth;

use App\UserPanti;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    use RegistersUsers;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nama_panti' => 'required|string|max:255',
            'email_panti' => 'required|string|email|max:255|unique:users',
            'password_panti' => 'required|string|min:6|confirmed',
        ]);
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
