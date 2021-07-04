<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('units', function (Blueprint $table) {
            $table->increments('id');
            $table->string('unit_name')->default(0);
            $table->string('unit_price')->default(0);
            $table->integer('property_id')->unsigned();
            $table->string('ownership_id')->nullable();
            $table->string('property_title')->default(0);
            $table->string('status')->default(0);
            $table->string('current')->default(1);
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
        Schema::dropIfExists('units');
    }
}
