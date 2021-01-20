<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_address')->unsigned();
            $table->integer('id_states')->unsigned();
            $table->date('date_registration');
            $table->date('date_session');
            $table->date('date_ending')->nullable();;
            $table->string('last_name');
            $table->string('name');
            $table->date('birthdate');
            $table->string('email')->unique;
            $table->string('role');
            $table->string('password');
            $table->string('type_id');
            $table->double('phone', 15, 0);
            $table->double('number_id', 20, 0)->unique;
            $table->rememberToken();
            $table->foreign('id_address')->references('id')->on('user_addresses')
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
        Schema::dropIfExists('users');
    }
}
