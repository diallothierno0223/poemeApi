<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poemes', function (Blueprint $table) {
            $table->id();
            $table->string("title");
            $table->longText('content');
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references('id')->on('users');
            $table->timestamps();
        });

        // Schema::table('poemes', function ($table) {
        //     $table->foreign("user_name")->references('name')->on('users');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('poemes');
    }
}
