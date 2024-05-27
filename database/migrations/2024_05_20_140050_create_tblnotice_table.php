<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblnoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblnotice', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumText('NoticeTitle');
            $table->integer('ClassId');
            $table->mediumText('NoticeMsg');
            $table->timestamp('CreationDate');
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
