<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friend__requests', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('from_id')->unsigned();
            $table->foreign('from_id')->references('id')->on('users');
            $table->bigInteger('to_id')->unsigned();
            $table->foreign('to_id')->references('id')->on('users');
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
        Schema::dropIfExists('friend__requests');
    }
}
