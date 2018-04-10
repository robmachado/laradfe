<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsIssuedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events_issueds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type', 50); //cce, cancelamento, cte, mdfe, etc.
            $table->integer('eventsequency')->unsigned();
            $table->dateTime('issuedate');
            $table->integer('issued_id')->unsigned(); //link to receiveds table
            $table->longText('eventcontent');
            $table->timestamps();
            $table->foreign('issued_id')->references('id')->on('issueds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events_issueds');
    }
}
