<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsReceivedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_receiveds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50); //cce, cancelamento, cte, mdfe, etc.
            $table->integer('eventsequency')->unsigned();
            $table->dateTime('issuedate');
            $table->integer('received_id')->unsigned(); //link to receiveds table
            $table->longText('eventcontent');
            $table->timestamps();
            $table->foreign('received_id')->references('id')->on('receiveds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_receiveds');
    }
}
