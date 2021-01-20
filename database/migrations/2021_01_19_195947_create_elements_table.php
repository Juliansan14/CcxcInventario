<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_service')->unsigned()->nullable();
            $table->integer('id_peripheral')->unsigned()->nullable();
            $table->integer('id_states')->unsigned()->nullable();
            $table->integer('id_active')->unsigned()->nullable();
            $table->integer('id_teams')->unsigned()->nullable();
            $table->foreign('id_service')->references('id')->on('services')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_peripheral')->references('id')->on('peripheral_elements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_active')->references('id')->on('active_elements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_teams')->references('id')->on('teams_elements')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('elements');
    }
}
