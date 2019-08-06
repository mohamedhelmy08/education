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
<<<<<<< HEAD:database/migrations/2019_08_01_094006_create_students_table.php
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
=======
            $table->string('phone')->unique();
            $table->integer('stage');
            $table->integer('is_excellent');
            $table->string('img');
            $table->string('address');
            $table->string('password');
            $table->integer('is_adaby')->nullable($value = true);
            $table->integer('is_examed')->nullable($value = true);
            $table->integer('is_examed_mcq')->nullable($value = true);
            $table->string('grades')->nullable($value = true);
>>>>>>> df43f438f381d0c6c1c4cbb422486d61fe426d27:database/migrations/2019_08_01_094004_create_students_table.php
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
