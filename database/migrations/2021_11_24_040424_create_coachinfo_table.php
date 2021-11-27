<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoachinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coachinfo', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->integer('number_seats');
            $table->integer('number_beds');
            $table->string('cargo_per_customer');
            $table->string('name');
            $table->string('phone');
            $table->string('timestart');
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
        Schema::dropIfExists('coachinfo');
    }
}
