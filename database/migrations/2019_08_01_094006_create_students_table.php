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
            $table->string('password');
            $table->integer('stage');
            $table->integer('is_excellent')->default('1');
            $table->string('img')->nullable();
            $table->string('address')->nullable();
            $table->integer('is_adaby')->default('1');
            $table->integer('is_examed')->default('0');
            $table->integer('is_examed_mcq')->default('0');
            $table->integer('is_approved')->default('0');
            $table->string('grades');
            $table->rememberToken();
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
