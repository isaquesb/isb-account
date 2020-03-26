<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountAddressTable extends Migration
{
    /**
     * Run the migrations.
     * @return void
     */
    public function up()
    {
        Schema::create('account_address', function (Blueprint $table) {
            $table->bigInteger('account_id', false, true);
            $table->integer('sort')->default(1);
            $table->integer('type_id');
            $table->string('street', 100)->nullable();
            $table->string('zip_code', 10)->nullable();
            $table->string('number', 10)->nullable();
            $table->string('complement', 100)->nullable();
            $table->string('district', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('state', 50)->nullable();
            $table->string('lat', 20)->nullable();
            $table->string('lng', 20)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('account_id')->references('id')->on('account');
            $table->foreign('type_id')->references('id')->on('account_type');
            $table->unique(['account_id', 'sort', 'type_id', 'deleted_at'], 'uk_account_address');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_address');
    }
}
