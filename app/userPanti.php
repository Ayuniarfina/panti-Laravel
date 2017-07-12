<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userPanti extends Model
{
  protected $fillable = ['nama_panti', 'email_panti', 'password_panti', 'alamat_panti', 'kondisi_panti', 'jml_penghuni', 'nama_pemilik', 'kondisi_panti', 'kontak_panti', 'foto'];

  protected $hidden = ['password_panti', 'remember_token',];
}
