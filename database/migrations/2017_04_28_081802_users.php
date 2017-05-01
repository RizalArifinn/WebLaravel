<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Users extends Migration
{
    public function up()
    {
      Schema::create('users', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->string('email');
          $table->string('password');
          $table->text('alamat');
          $table->integer('status');
          $table->timestamps();
      });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
