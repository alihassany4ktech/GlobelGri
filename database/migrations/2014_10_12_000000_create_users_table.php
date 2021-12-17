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
            $table->integer('creater_id')->nullable();
            $table->string('type')->nullable();
            $table->string('role')->nullable();
            // $table->integer('role_id');
            // $table->foreign('role_id')->references('id')->on('roles');
            $table->integer('user_otp')->default('0');
            $table->string('image')->default('dist/img/agentPic.png');
            $table->string('name');
            $table->string('provider_id');
            $table->string('email')->unique();
            $table->string('phone')->default('0');
            $table->string('address')->default('0');
            $table->integer('status')->default('1');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
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
