<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BDtast extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
  {
    Schema::create('utilisateurs', function(Blueprint $table) {
      $table->increments('id');
      $table->timestamps();
      $table->string('name')->unique();
      $table->string('email');
      $table->int('tele');
      $table->string('ville');

    });
  }
  public function down()
  {
    Schema::drop('utilisateurs');
  }
}
