<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFakultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fakultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->UnsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('nama_fakultas');
            $table->string('foto')->nullable();
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('universitas_fakultas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('id_universitas');
            $table->foreign('id_universitas')->references('id')->on('universitas')->onDelete('cascade');
            $table->unsignedbigInteger('id_fakultas');
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade');
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
        Schema::dropIfExists('fakultas');
        Schema::dropIfExists('universitas_fakultas');
    }
}
