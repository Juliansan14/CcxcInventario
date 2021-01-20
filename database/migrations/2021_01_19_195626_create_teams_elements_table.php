<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_states')->unsigned();
            $table->date('date_purchase');
            $table->string('name_team');
            $table->string('processor');
            $table->string('sistem_operation');
            $table->string('ram');
            $table->string('type_harddriver');
            $table->string('model_team');
            $table->string('brand_team');
            $table->string("serial")->unique;
            $table->string('description_team');
            $table->foreign('id_states')->references('id')->on('states')
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
        Schema::dropIfExists('teams_elements');
    }
}
