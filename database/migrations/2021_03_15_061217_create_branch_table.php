<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
//        Schema::dropIfExists('branch');
        Schema::create('branch', function (Blueprint $table) {
            $table->increments('br_id');
            $table->string('br_name');
            $table->integer('cpn_id');
            $table->string('br_email');
            $table->string('br_address');
            $table->string('br_area');
            $table->string('br_phone');
            $table->string('br_status');
            $table->string('br_website');
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
        Schema::dropIfExists('branch');
    }
}
