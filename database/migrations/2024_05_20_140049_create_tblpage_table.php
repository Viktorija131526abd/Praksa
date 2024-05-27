<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblpageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PageType', 200);
            $table->mediumText('PageTitle');
            $table->mediumText('PageDescription');
            $table->string('Email', 200);
            $table->bigInteger('MobileNumber');
            $table->date('UpdationDate');
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
