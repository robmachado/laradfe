<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fantasy', 25);
            $table->string('name', 250);
            $table->string('cnpj', 15);
            $table->string('ie', 15);
            $table->string('im', 15);
            $table->string('cnae', 20);
            $table->integer('crt')->unsigned();
            $table->longText('certificate');
            $table->string('password', 100);
            $table->datetime('validuntil');
            $table->integer('model')->unsigned();
            $table->integer('serie')->unsigned();
            $table->integer('number')->unsigned();
            $table->integer('environment')->unsigned();
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
        Schema::dropIfExists('companies');
    }
}
