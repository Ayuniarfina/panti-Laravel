<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('role_id')->references('id')->on('roles')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('donasi', function (Blueprint $table) {
            $table->foreign('panti_id')->references('id')->on('panti')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('donasi_barang', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('donasi_barang', function (Blueprint $table) {
            $table->foreign('donasi_id')->references('id')->on('donasi')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('barang_donasi', function (Blueprint $table) {
            $table->foreign('barang_id')->references('id')->on('barang')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });

        Schema::table('barang_donasi', function (Blueprint $table) {
            $table->foreign('donasi_id')->references('id')->on('donasi_barang')
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign('users_role_id_foreign');
        });

        Schema::table('donasi', function (Blueprint $table) {
            $table->dropForeign('donasi_panti_id_foreign');
        });

        Schema::table('donasi_barang', function (Blueprint $table) {
            $table->dropForeign('donasi_barang_user_id_foreign');
        });

        Schema::table('donasi_barang', function (Blueprint $table) {
            $table->dropForeign('donasi_barang_donasi_id_foreign');
        });

        Schema::table('barang_donasi', function (Blueprint $table) {
            $table->dropForeign('barang_donasi_barang_id_foreign');
        });
        
        Schema::table('barang_donasi', function (Blueprint $table) {
            $table->dropForeign('barang_donasi_donasi_id_foreign');
        });
    }
}
