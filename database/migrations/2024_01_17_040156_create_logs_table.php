<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->id();
			$table->integer('user_id');
			$table->string('user_ip');
			$table->string('user_name');
			$table->string('activity_id');
			$table->string('event');
			$table->json('changes')->nullable();
			$table->string('browser');
			$table->string('os');
			$table->string('mac');
			$table->string('controller');
			$table->string('method');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
};
