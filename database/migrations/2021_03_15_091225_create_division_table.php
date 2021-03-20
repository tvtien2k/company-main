<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDivisionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::dropIfExists('division');
        Schema::create('division', function (Blueprint $table) {
            $table->increments('dvs_id');
            $table->string('dvs_name');
            $table->integer('br_id');
            $table->string('dvs_email');
            $table->string('dvs_address');
            $table->string('dvs_area');
            $table->string('dvs_phone');
            $table->string('dvs_status');
            $table->string('dvs_website');
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
        Schema::dropIfExists('division');
    }
}
