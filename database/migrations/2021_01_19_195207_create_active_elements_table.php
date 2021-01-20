<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActiveElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_states')->unsigned();
            $table->date('date_purchase');
            $table->string('name_active');            
            $table->string('description_activo');
            $table->string('plates_activo')->unique;
            $table->string('brand_activo');
            $table->string('model_activo');            
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
        Schema::dropIfExists('active_elements');
    }
}
