<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountStatusLangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_status_lang', function (Blueprint $table) {
            $table->integer('status_id');
            $table->string('language_id', 5);
            $table->string('name', 50);
            $table->string('description', 200);
            $table->timestamps();
            $table->softDeletes();
            $table->unique(['status_id', 'language_id']);
            $table->foreign('status_id')->references('id')->on('account_status');
            $table->foreign('language_id')->references('id')->on('language')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_status_lang');
    }
}
