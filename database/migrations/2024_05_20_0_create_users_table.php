<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;


class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 200)->nullable();
            $table->string('username', 200)->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email', 200)->nullable();
            $table->string('password', 200)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('class_id');
            $table->string('gender', 50)->nullable();
            $table->string('image', 200)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->enum('role', ['admin', 'student'])->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()

    {
        Schema::dropIfExists('users');
    }
}
