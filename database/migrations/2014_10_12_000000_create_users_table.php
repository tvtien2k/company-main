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
//        Schema::dropIfExists('users');

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->integer('dvs_code')->nullable();
            $table->integer('pr_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('email_work')->nullable();
            $table->date('birthday')->nullable();
            $table->date('join_date')->nullable();
            $table->string('passport')->nullable();
            $table->date('date_passport')->nullable();
            $table->string('experience')->nullable();
            $table->string('contract')->nullable();
            $table->string('image')->nullable();
            $table->rememberToken()->nullable();
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
