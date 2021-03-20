<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

//        Schema::dropIfExists('company');

        Schema::create('company', function (Blueprint $table) {
            $table->increments('cpn_id');
            $table->string('cpn_name');
            $table->string('cpn_email');
            $table->string('cpn_phone');
            $table->string('cpn_status');
            $table->string('cpn_address');
            $table->string('cpn_website');
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


        Schema::dropIfExists('company');
    }
}

