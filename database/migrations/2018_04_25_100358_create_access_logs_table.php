<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccessLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('access_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('site_id');
            $table->integer('host_id');
            $table->integer('action_id');
            $table->integer('access_client_id');
            $table->bigInteger('request_time');
            $table->unsignedBigInteger('ip');
            $table->text('referrer');
            $table->string('session_id');
            $table->text('href');
            $table->string('keywords', 100);
            $table->string('title', 100);
            $table->string('useragent', 255);
            $table->unsignedInteger('width');
            $table->unsignedInteger('height');
            $table->unsignedInteger('color_depth');
            $table->bigInteger('created_at');
            $table->bigInteger('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('access_logs');
    }
}
