<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('design_id')->nullable();
            $table->unsignedFloat('area')->nullable();
            $table->string('unitOfArea')->nullable();
            $table->string('timeOfRsponse')->nullable();
            $table->string('participateState')->nullable();
            $table->string('contactTybe')->nullable();
            $table->string('customerName')->nullable();
            $table->string('customerPhoneNo')->nullable();




            $table->foreign('design_id')->references('id')->on('designs');
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
        Schema::dropIfExists('quizzes');
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
