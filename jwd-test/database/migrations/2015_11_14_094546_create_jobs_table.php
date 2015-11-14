<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company_name');
            $table->string('company_href');
            $table->string('company_email');
            $table->text('company_description');
            $table->string('job_name');
            $table->string('job_salary');
            $table->string('job_region');
            $table->string('job_experience');
            $table->text('job_description');
            $table->text('job_minimal_req');
            $table->text('job_desirable_req');
            $table->text('job_duties');
            $table->text('job_add_description');
            $table->string('job_type_employment');
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
        Schema::drop('jobs');
    }
}
