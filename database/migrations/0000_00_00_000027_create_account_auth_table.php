<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountAuthTable extends Migration
{
    /**
     * @return void
     */
    public function up()
    {
        Schema::create('account_auth', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->bigInteger('account_id', false, true);
            $table->string('name', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 64)->nullable();
            $table->tinyInteger('active')->unsigned()->default(1);
            $table->tinyInteger('change_password')->unsigned()->nullable();
            $table->dateTime('last_login')->nullable();
            $table->dateTime('last_activity')->nullable();
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
        Schema::dropIfExists('account_auth');
    }
}
