<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('company_id')->unsigned();
            $table->string('xLgr', 200);
            $table->integer('nro')->unsigned();
            $table->string('xCpl', 200);
            $table->string('xBairro', 200);
            $table->integer('cMun')->unsigned();
            $table->string('xMun', 200);
            $table->string('uf', 2);
            $table->string('cep', 20);
            $table->integer('cPais')->unsigned();
            $table->string('xPais', 200);
            $table->string('fone', 200);
            $table->timestamps();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('addresses');
    }
}
