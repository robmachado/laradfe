<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuedsTable extends Migration
{
    /**
     * Run the migrations.
     * Contains NFe issued from payee
     * @return void
     */
    public function up()
    {
        Schema::create('issueds', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key', 44)->unique();
            $table->integer('number')->unsigned();
            $table->integer('serie')->unsigned();
            $table->string('version', 10);
            $table->integer('model')->unsigned();
            $table->dateTime('date');
            $table->string('recipient', 200);
            $table->decimal('amount', 16, 2);
            $table->decimal('billed', 16, 2)->nullable();
            $table->decimal('weight', 16, 2)->nullable();
            $table->integer('status')->unsigned()->nullable();
            $table->longText('xmlcontent');
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
        Schema::dropIfExists('issueds');
    }
}
