<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('Student_Name');
            $table->string('Class');
            $table->string('Section');
            $table->string('Subject_1_Marks');
            $table->string('Subject_2_Marks');
            $table->string('Subject_3_Marks');
            $table->string('Subject_4_Marks');
            $table->string('Subject_5_Marks');
            $table->string('Status');
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
};
