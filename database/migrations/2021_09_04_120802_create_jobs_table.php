<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('id')->unsigned(false);

            $table->integer('profile_id')->nullable();
            $table->foreign('profile_id')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');

            $table->integer('freelancer_id')->nullable();
            $table->foreign('freelancer_id')->references('id')->on('profiles')->onUpdate('cascade')->onDelete('cascade');
            
            $table->string('headline')->nullable();
            $table->text('description')->nullable();
            $table->string('file')->nullable();
            $table->string('skill')->nullable();
            $table->string('category')->nullable();
            $table->string('scope')->nullable();
            $table->string('budget')->nullable();
            $table->string('length')->nullable();
            $table->enum('status',['accepted','draft','active','completed'])->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}
