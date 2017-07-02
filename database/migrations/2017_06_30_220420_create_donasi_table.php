<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('jenis_donasi');
            $table->binary('photo');
            $table->text('deskripsi');
            $table->integer('uang_terkumpul')->default(0);
            $table->text('barang_terkumpul')->nullable();
            $table->boolean('seen')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->integer('panti_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donasi');
    }
}
