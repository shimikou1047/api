<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatDb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chat_db', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('class')->nullable();
            $table->string('text')->nullable();
            $table->timestamps();
        });
    }
}
