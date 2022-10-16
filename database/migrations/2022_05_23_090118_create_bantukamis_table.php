<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBantukamisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bantukamis', function (Blueprint $table) {
            $table->id();
            $table->string('bencana');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->date('tanggal');
            $table->string('foto');
            $table->text('deskripsi');
            $table->foreignId('user_id');
            $table->tinyInteger('is_approval')->nullable();
            $table->tinyInteger('is_ended')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bantukamis');
    }
}
