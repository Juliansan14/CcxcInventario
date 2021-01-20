<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')->unsigned();
            $table->integer('id_user')->unsigned();
            $table->integer('id_states')->unsigned();
            $table->date('date_registry');
            $table->date('date_ending')->nullable();
            $table->string('assigned_technician');
            $table->string('assigned_client');
            $table->double('qualification_service',2);
            $table->double('qualification_element',2);
            $table->string('description_problem');
            $table->string('description_solution');
            $table->foreign('id_category')->references('id')->on('service_category')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_states')->references('id')->on('states')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_user')->references('id')->on('users')
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
        Schema::dropIfExists('services');
    }
}
