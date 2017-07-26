<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('period');
            $table->integer('slo_id');
            $table->integer('goal_id');
            $table->integer('team_id');
            $table->string('course');
            $table->text('method');
            $table->text('measure');
            $table->text('floyd');
            $table->text('cartersville');
            $table->text('marietta');
            $table->text('paulding');
            $table->text('heritage');
            $table->text('douglasville');
            $table->text('elearning');
            $table->text('data_summary');
            $table->text('actions');
            $table->integer('results');
            $table->date('submit_date');
            $table->date('complete_date');


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
        Schema::dropIfExists('assessments');
    }
}
