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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('agency', 20);
            $table->string('departure_station')->nullable();
            $table->string('arrival_station')->nullable();
            $table->decimal('departure_time', 2,2)->nullable();
            $table->decimal('arrival_time', 2,2)->nullable();
            $table->tinyInteger('carriages')->nullable();
            $table->boolean('is_in_time')->default(1);
            $table->boolean('is_cancelled')->default(0);
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
        Schema::dropIfExists('trains');
    }
};
