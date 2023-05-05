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
        Schema::create('day_week', function (Blueprint $table) {
            $table->unsignedBigInteger('day_id')->unsigned()->index();
            $table->foreign('day_id')->references('id')->on('days')->cascadeOnDelete();

            $table->unsignedBigInteger('week_id')->unsigned()->index();
            $table->foreign('week_id')->references('id')->on('weeks')->cascadeOnDelete();

            $table->primary(['day_id', 'week_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('day_week');
    }
};
