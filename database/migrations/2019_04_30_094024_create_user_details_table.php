<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userDetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('dob');
            $table->string('name')->nullable();
            $table->string('Surname')->nullable();
            $table->string('gender')->nullable();
            $table->text('phone')->nullable();
            $table->text('comment')->nullable();
            $table->string('email')->unique()->nullable();
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
        Schema::dropIfExists('userDetails');
    }
}
