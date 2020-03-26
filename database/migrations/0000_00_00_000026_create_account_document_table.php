<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_document', function (Blueprint $table) {
            $table->bigInteger('account_id', false, true);
            $table->integer('sort')->default(1);
            $table->integer('type_id');
            $table->bigInteger('number', false, true)->nullable();
            $table->string('formatted', 150)->nullable();
            $table->string('state', 2)->nullable();
            $table->dateTime('since')->nullable();
            $table->dateTime('expiration')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('account_id')->references('id')->on('account');
            $table->foreign('type_id')->references('id')->on('account_type');
            $table->unique(['account_id', 'sort', 'type_id', 'deleted_at'], 'uk_account_document');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_document');
    }
}
