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
        Schema::create('marabouts_spells', function (Blueprint $table) {
            $table->unsignedBigInteger('marabout_id');
            $table->foreign('marabout_id')->references('id')->on('marabouts');
            $table->unsignedBigInteger('spell_id');
            $table->foreign('spell_id')->references('id')->on('spells');
        });

        Schema::table('marabouts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->text('resume');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('marabouts_spells');

        if (Schema::hasTable('marabouts')) {
            $table->dropForeign(['user_id']);
            $table->dropColumn('resume');
        }

    }
};
