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
        Schema::create('marabouts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->datetime('activity_begin_date');
            $table->string('phone');
            $table->string('address');
            $table->string('mail');
            $table->string('picture_url');
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
        Schema::dropIfExists('marabouts');
    }
};
