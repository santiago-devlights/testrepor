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
            $table->increments('id'); //INTEGERS UNSIGNED - AUTOINCREMENT
            $table->string('name'); //VARCHAR
            $table->string('email')->unique(); //VARCHAR - UNIQUE
            $table->string('password');
            $table->boolean('is_admin')->default(false);
            $table->rememberToken(); //HELPERS FOR A WAY TO SAVE A TOKEN TO REMEMBER USERS
            $table->timestamps(); //
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
