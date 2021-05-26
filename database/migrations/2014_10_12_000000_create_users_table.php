<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            // $table->foreign('role_id')->references('id')->on('roles');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->default('0');
            $table->integer('status')->default('1');
            $table->timestamp('email_verified_at');
            $table->string('password');
            $table->string('image')->default('0');
            $table->text('biography')->default('0');
            $table->string('facebook_url')->default('0');
            $table->string('twitter_url')->default('0');
            $table->string('linkedin_url')->default('0');
            $table->string('instagram_url')->default('0');
            $table->string('google_url')->default('0');
            $table->string('skype_url')->default('0');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
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
