<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeripheralElementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peripheral_elements', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_states')->unsigned();
            $table->date('fecha_compra');
            $table->string('name_peripheral');           
            $table->string('description_peripheral');
            $table->string('plate_peripheral')->unique;
            $table->string('brand_peripheral');
            $table->string('model_peripheral');
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
        Schema::dropIfExists('peripheral_elements');
    }
}
