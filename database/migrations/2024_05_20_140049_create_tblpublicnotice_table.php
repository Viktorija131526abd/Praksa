<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblpublicnoticeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblpublicnotice', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NoticeTitle', 200);
            $table->mediumText('NoticeMessage');
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
