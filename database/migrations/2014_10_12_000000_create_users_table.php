<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('surname')->nullable();
            $table->string('username')->nullable();
            $table->string('password')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('firstname')->nullable();
            $table->date('birthday')->nullable();
            $table->string('middlename')->nullable();
            $table->string('account_pin')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('account_name')->nullable();
            $table->string('account_number')->nullable();
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
