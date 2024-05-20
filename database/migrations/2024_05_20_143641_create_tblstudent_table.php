<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblstudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblstudent', function (Blueprint $table) {
            $table->increments('id');
            $table->string('StudentName', 200);
            $table->string('StudentEmail', 200);
            $table->string('StudentClass', 100);
            $table->string('Gender', 50);
            $table->date('DOB');
            $table->string('StuID', 200);
            $table->mediumText('FatherName');
            $table->mediumText('MotherName');
            $table->bigInteger('ContactNumber');
            $table->bigInteger('AlternateNum');
            $table->mediumText('Address');
            $table->string('UserName', 200);
            $table->string('Password', 200);
            $table->string('Image', 200);
            $table->timestamp('DateofAdmission');
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
