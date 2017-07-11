	<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/register', function () {	
	$users = DB::table('users')->get();
    return view('auth.register',compact('users'));
});

Route::get('/login', function () {	
	$users = DB::table('users')->get();
    return view('auth.login',compact('users'));
});

Route::get('/donasi-list', function () {	
	$donasi = DB::table('donasi')->get();
    return view('front/donasi.index',compact('donasi'));
});

Route::get('/donasi-detail', function () {	
	$donasi = DB::table('donasi')->get();
    return view('front/donasi.show',compact('donasi'));
});

Route::get('/donasi-form', function () {	
	$donasi = DB::table('donasi')->get();
    return view('front/donasi.form',compact('donasi'));
});

Route::get('/panti-list', function () {	
	$panti = DB::table('panti')->get();
    return view('front/panti.index',compact('panti'));
});

Route::get('/panti-detail', function () {	
	$panti = DB::table('panti')->get();
    return view('front/panti.show',compact('panti'));
});

Route::get('/regispanti', function () {	
	$panti = DB::table('panti')->get();
    return view('front/panti.form',compact('panti'));
});

use App\Task;

Route::get('/tasks', function () {	
	$tasks = Task::all();
    return view('tasks.index',compact('tasks'));
});

Route::get('/tasks/{task}', function ($id) {
	$task = Task::find($id);
    return view('tasks.show',compact('task'));
});
//Home
use App\Panti;
Route::get('/', 'HomeController')->name('home');
