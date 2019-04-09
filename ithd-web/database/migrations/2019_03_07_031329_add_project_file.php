<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectFile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('projectId');
            $table->string('userId');
            $table->string('project_filename')->nullable();
            $table->string('project_mime')->nullable();
            $table->string('project_original_filename')->nullable();
            // $table->string('projectAddress');
            // $table->date('projectStartDate');
            // $table->date('projectExpectedEndDate');
            // $table->date('projectActualEndDate');
            // $table->string('projectType');
            // $table->string('projectStatus');
            // $table->date('projectBillDate');
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
        //
    }
}
