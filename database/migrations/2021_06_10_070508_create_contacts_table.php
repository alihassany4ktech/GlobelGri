<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('owner_id')->default('0');
            $table->string('property_id')->default('0');
            $table->string('type')->default('0');
            $table->string('date')->default('0');
            $table->string('time')->default('0');
            $table->string('phone')->default('0');
            $table->string('email')->default('0');
            $table->boolean('check')->default('0');
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
        Schema::dropIfExists('contacts');
    }
}
