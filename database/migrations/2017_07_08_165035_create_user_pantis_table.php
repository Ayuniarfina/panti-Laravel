<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserPantisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_pantis', function (Blueprint $table) {
        $table->increments('id');
        $table->string('nama_panti');
        $table->string('email_panti')->unique();
        $table->string('password_panti');
        $table->string('alamat_panti');
        $table->string('kondisi_panti');
        $table->string('jml_penghuni');
        $table->string('nama_pemilik');
        $table->string('kontak_panti');
        $table->string('foto');
        $table->boolean('dilihat')->default(false);
        $table->boolean('valid')->default(false);
        $table->boolean('confirmed')->default(false);
        $table->timestamps();
        $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_pantis');
    }
}
