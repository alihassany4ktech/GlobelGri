<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('agent_id')->default('0');
            $table->string('propert_title')->default('0');
            $table->string('price')->default('0');
            $table->string('featured_photo')->default('0');
            $table->string('gallery_photos')->default('0');
            $table->integer('bedroom')->default('0');
            $table->integer('bathroom')->default('0');
            $table->string('garages')->default('0');
            $table->string('area')->default('0');
            $table->string('property_type')->default('0');
            $table->string('propert_status')->default('0');
            $table->string('description')->default('0');
            // $table->string('location')->default('0');
            $table->string('private_note')->default('0');
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
        Schema::dropIfExists('properties');
    }
}
