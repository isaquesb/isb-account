<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountStatusDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('account_status_detail', function (Blueprint $table) {
            $table->integer('status_id');
            $table->integer('id', false, true);
            $table->string('name', 30);
            $table->timestamps();
            $table->softDeletes();
            $table->primary(['status_id', 'id']);
            $table->foreign(['status_id'])->references(['id'])->on('account_status');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('account_status_detail');
    }
}
