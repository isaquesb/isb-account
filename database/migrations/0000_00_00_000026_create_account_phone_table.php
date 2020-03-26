<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountPhoneTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_phone', function (Blueprint $table) {
            $table->bigInteger('account_id', false, true);
            $table->integer('sort')->default(1);
            $table->integer('type_id');
            $table->integer('region_area', false, true);
            $table->integer('local_area', false, true);
            $table->integer('number', false, true);
            $table->string('complement', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('account_id')->references('id')->on('account');
            $table->foreign('type_id')->references('id')->on('account_type');
            $table->unique(['account_id', 'sort', 'type_id', 'deleted_at'], 'uk_account_phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_phone');
    }
}
