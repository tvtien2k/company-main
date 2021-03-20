<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skill', function (Blueprint $table) {
            $table->increments('sk_id');
            $table->integer('user_id');
            $table->string('sk_type');
            $table->string('sk_name');
            $table->string('sk_note');
            $table->string('sk_experiences');
            $table->string('sk_note_experiences');
            $table->string('sk_level');
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
        Schema::dropIfExists('skill');
    }
}
