<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinalAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('final_assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('floyd')->nullable();
            $table->text('cartersville')->nullable();
            $table->text('marietta')->nullable();
            $table->text('paulding')->nullable();
            $table->text('heritage')->nullable();
            $table->text('douglasville')->nullable();
            $table->text('elearning')->nullable();
            $table->text('data_summary')->nullable();
            $table->text('actions')->nullable();
            $table->integer('results')->nullable();
            $table->date('complete_date')->nullable();
            $table->integer('assessment_id')->nullable();
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
        Schema::dropIfExists('final_assessments');
    }
}
