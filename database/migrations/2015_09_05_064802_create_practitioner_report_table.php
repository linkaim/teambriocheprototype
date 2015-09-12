<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePractitionerReportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practitioner_report', function(Blueprint $table)
            {   
                $table->increments('prid');
                $table->integer('practitioner_id')->unsigned()->index();
                $table->foreign('practitioner_id')->references('id')->on('practitioners');

                $table->integer('report_id')->unsigned()->index();
                $table->foreign('report_id')->references('id')->on('reports')->onDelete('cascade');


            }); //product and tag
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('practitioner_report');
    }
}
