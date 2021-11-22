<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_subscriptions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('agent_id');
            $table->string('subscription_id');
            $table->string('title');
            $table->string('price');
            $table->string('valid_property');
            $table->string('status');
            $table->text('description');
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
        Schema::dropIfExists('purchased_subscriptions');
    }
}
