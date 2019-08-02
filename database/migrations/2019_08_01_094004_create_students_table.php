<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->collation('utf8_general_ci');
            $table->string('phone');
            $table->integer('stage');
            $table->integer('is_excellent');
            $table->string('img');
            $table->string('address');
            $table->integer('is_adaby');
            $table->integer('is_examed');
            $table->integer('is_examed_mcq');
            $table->string('grades');
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
        Schema::dropIfExists('students');
    }
}
