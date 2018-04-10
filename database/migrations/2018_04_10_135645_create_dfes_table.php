<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDfesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dfes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nsu')->unsigned();
            $table->string('type', 50);
            $table->boolean('manifest'); //0 none, 1 yes , other already manifested
            $table->string('documentkey', 45);
            $table->string('cnpj', 15);
            $table->string('company', 200);
            $table->dateTime('issuedate');
            $table->string('protocol', 200);
            $table->longText('nsucontent');
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
        Schema::dropIfExists('dfes');
    }
}
