<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbladminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbladmin', function (Blueprint $table) {
            $table->increments('id');
            $table->string('AdminName', 120);
            $table->string('UserName', 120);
            $table->bigInteger('MobileNumber');
            $table->string('Email', 200);
            $table->string('Password', 200);
            $table->timestamp('AdminRegdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblclass');
    }
}
