<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->integer('dni')->unique();
            $table->string('email')->unique();
            $table->string('name');
            $table->string('lastname');
            $table->string('password');
            $table->string('date_n');

            $table->unsignedInteger('network_id')->nullable();
            $table->foreign('network_id')->references('id')
            ->on('networks');
            
            $table->unsignedInteger('rol_id')->nullable();
            $table->foreign('rol_id')->references('id')
            ->on('rols');
            
            $table->boolean('confirmed')->default(0);
            $table->string('confirmation_code')->nullable();
            $table->string('last_login')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
