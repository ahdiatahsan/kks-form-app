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
        Schema::create('tatanan_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tatananone_id')->nullable()->constrained('tatanan_ones')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatanantwo_id')->nullable()->constrained('tatanan_twos')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatananthree_id')->nullable()->constrained('tatanan_threes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatananfour_id')->nullable()->constrained('tatanan_fours')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatananfive_id')->nullable()->constrained('tatanan_fives')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatanansix_id')->nullable()->constrained('tatanan_sixes')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatananseven_id')->nullable()->constrained('tatanan_sevens')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatananeight_id')->nullable()->constrained('tatanan_eights')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('tatanannine_id')->nullable()->constrained('tatanan_nines')->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('note');
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
        Schema::dropIfExists('tatanan_notes');
    }
};
