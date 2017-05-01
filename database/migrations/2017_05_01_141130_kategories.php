<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kategories extends Migration
{
    public function up()
    {
      Schema::create('kategori', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama_kategori');
      });
    }

    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
