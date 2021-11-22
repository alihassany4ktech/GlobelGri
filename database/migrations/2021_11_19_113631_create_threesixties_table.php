<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThreesixtiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('threesixties', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_id');
            $table->string('property_id');
            $table->string('property_title');
            $table->string('agent_name');
            $table->string('agent_email');
            $table->string('agent_phone');
            $table->string('agent_address');
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
        Schema::dropIfExists('threesixties');
    }
}
