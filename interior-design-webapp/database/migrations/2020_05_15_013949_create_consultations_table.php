<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('comment')->nullable();
            $table->string('tybeOfContact')->nullable();
            $table->dateTime('timeToCall')->nullable();



            $table->softDeletes();
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
        Schema::dropIfExists('consultations');
    }
}

// $table->id();
// $table->string('bookName')->nullable();
// $table->unsignedInteger('pricePerDay')->nullable();
// $table->string('author')->nullable();
// $table->text('description')->nullable();
// $table->string('image')->nullable();
// $table->unsignedInteger('count')->nullable();
// $table->unsignedBigInteger('category_id');
// $table->unsignedBigInteger('user_id');

// $table->softDeletes();
// $table->foreign('category_id')->references('id')->on('categories');
// $table->foreign('user_id')->references('id')->on('users');
