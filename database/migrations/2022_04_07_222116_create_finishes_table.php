<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Race;
use App\Models\Driver;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finishes', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Race::class)->constrained();
            //FK de los 10 primeros pilotos
            $table->unsignedBigInteger('driver_1_id');
            $table->foreign('driver_1_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_2_id');
            $table->foreign('driver_2_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_3_id');
            $table->foreign('driver_3_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_4_id');
            $table->foreign('driver_4_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_5_id');
            $table->foreign('driver_5_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_6_id');
            $table->foreign('driver_6_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_7_id');
            $table->foreign('driver_7_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_8_id');
            $table->foreign('driver_8_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_9_id');
            $table->foreign('driver_9_id')->references('id')->on('drivers');
            $table->unsignedBigInteger('driver_10_id');
            $table->foreign('driver_10_id')->references('id')->on('drivers');
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
        Schema::dropIfExists('finishes');
    }
};
