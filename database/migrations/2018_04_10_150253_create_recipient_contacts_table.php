<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipientContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipient_contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recipient_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('fone');
            $table->string('cel');
            $table->timestamps();
            $table->foreign('recipient_id')->references('id')->on('recipients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipient_contacts');
    }
}
