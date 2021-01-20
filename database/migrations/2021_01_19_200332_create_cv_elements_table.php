<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cv_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_elements')->unsigned();
            $table->date('date_registry');
            $table->date('date_assigner')->nullable();
            $table->string('assigned_technician');
            $table->string('assigned_client');
            $table->string('name_event');
            $table->string('description_event');
            $table->string('observation_event');
            $table->foreign('id_element')->references('id')->on('elements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cv_elements');
    }
}
