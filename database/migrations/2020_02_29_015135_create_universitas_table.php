<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniversitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('universitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_universitas');
            $table->string('slug');
            $table->text('konten');
            $table->string('foto')->nullable();
            $table->string('alamat');
            $table->string('akreditasi');
            $table->UnsignedBigInteger('id_user');
            $table->timestamps();
        });

        Schema::create('artikel_universitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('id_fakultas');
            $table->foreign('id_fakultas')->references('id')->on('fakultas')->onDelete('cascade');
            $table->unsignedbigInteger('id_universitas');
            $table->foreign('id_universitas')->references('id')->on('universitas')->onDelete('cascade');
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
        Schema::dropIfExists('universitas');
    }
}
