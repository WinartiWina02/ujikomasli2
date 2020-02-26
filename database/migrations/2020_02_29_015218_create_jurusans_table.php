<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJurusansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurusans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_jurusan');
            $table->string('slug');
            $table->string('foto')->nullable();
            $table->timestamps();
        });

        Schema::create('artikel_jurusan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('id_fakultas');
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade');
            $table->unsignedbigInteger('id_jurusan');
            $table->foreign('id_jurusan')->references('id')->on('jurusans')->onDelete('cascade');
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
        Schema::dropIfExists('jurusans');
        Schema::dropIfExists('artikel_jurusan');
    }
}
