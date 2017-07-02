<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonasiUangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donasi_uang', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nominal');
            $table->integer('pembayaran_id');
            $table->boolean('seen')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->integer('user_id');
            $table->integer('donasi_id');
            $table->timestamps();
        });

        Schema::table('donasi_uang', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('donasi_uang', function (Blueprint $table) {
            $table->foreign('pembayaran_id')->references('id')->on('pembayaran')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('donasi_uang', function (Blueprint $table) {
            $table->foreign('donasi_id')->references('id')->on('donasi')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('donasi_uang', function (Blueprint $table) {
            $table->dropForeign('donasi_uang_user_id_foreign');
        });

        Schema::table('donasi_uang', function (Blueprint $table) {
            $table->dropForeign('donasi_uang_pembayaran_id_foreign');
        });

        Schema::table('donasi_uang', function (Blueprint $table) {
            $table->dropForeign('donasi_uang_donasi_id_foreign');
        });

        Schema::dropIfExists('donasi_uang');
    }
}
