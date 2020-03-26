<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('sort')->default(1);
            $table->integer('type_id')->default(\Isb\Account\Type::ACCOUNT_USER);
            $table->string('name', 100);
            $table->string('avatar', 150)->nullable();
            $table->string('language_id', 5)->nullable();
            $table->integer('status_id')->default(\Isb\Account\Status\Status::REGISTERED);
            $table->integer('status_detail_id', false, true)->default(0);
            $table->string('document', 20)->nullable();
            $table->string('document_type', 1)->nullable();
            $table->date('since')->nullable();
            $table->bigInteger('parent_id')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign(['status_id', 'status_detail_id'], 'fk_account_status')
                ->references(['status_id', 'id'])->on('account_status_detail');
            $table->foreign('type_id')->references('id')->on('account_type');
            $table->foreign('parent_id')->references('id')->on('account');
            $table->foreign('language_id')->references('id')->on('language');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account');
    }
}
