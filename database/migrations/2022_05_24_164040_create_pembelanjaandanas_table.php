<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelanjaandanasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelanjaandanas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('bantukami_id');
            $table->foreignId('user_id');
            $table->integer('nominal');
            $table->string('pesan');
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
        Schema::dropIfExists('pembelanjaandanas');
    }
}
