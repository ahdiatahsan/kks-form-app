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
        Schema::create('attachment_sixes', function (Blueprint $table) {
            $table->id();
            $table->string('p1_1', 5)->nullable();
            $table->string('p1_2', 5)->nullable();
            $table->string('p2_1', 5)->nullable();
            $table->string('p2_2', 5)->nullable();
            $table->string('p3_1', 5)->nullable();
            $table->string('p3_2', 5)->nullable();
            $table->string('p4_1', 5)->nullable();
            $table->string('p4_2', 5)->nullable();
            $table->string('p5_1', 5)->nullable();
            $table->string('p5_2', 5)->nullable();
            $table->string('p6_1', 5)->nullable();
            $table->string('p6_2', 5)->nullable();
            $table->string('p7_1', 5)->nullable();
            $table->string('p7_2', 5)->nullable();
            $table->string('p8_1', 5)->nullable();
            $table->string('p8_2', 5)->nullable();
            $table->string('p9_1', 5)->nullable();
            $table->string('p9_2', 5)->nullable();
            $table->string('p10_1', 5)->nullable();
            $table->string('p10_2', 5)->nullable();
            $table->string('p11_1', 5)->nullable();
            $table->string('p11_2', 5)->nullable();
            $table->string('p12_1', 5)->nullable();
            $table->string('p12_2', 5)->nullable();
            $table->string('p13_1', 5)->nullable();
            $table->string('p13_2', 5)->nullable();
            $table->string('p14_1', 5)->nullable();
            $table->string('p14_2', 5)->nullable();
            $table->string('p15_1', 5)->nullable();
            $table->string('p15_2', 5)->nullable();
            $table->string('p16_1', 5)->nullable();
            $table->string('p16_2', 5)->nullable();
            $table->string('p17_1', 5)->nullable();
            $table->string('p17_2', 5)->nullable();
            $table->string('p18_1', 5)->nullable();
            $table->string('p18_2', 5)->nullable();
            $table->string('p19_1', 5)->nullable();
            $table->string('p19_2', 5)->nullable();
            $table->string('p20_1', 5)->nullable();
            $table->string('p20_2', 5)->nullable();
            $table->string('p21_1', 5)->nullable();
            $table->string('p21_2', 5)->nullable();
            $table->string('p22_1', 5)->nullable();
            $table->string('p22_2', 5)->nullable();
            $table->string('p23_1', 5)->nullable();
            $table->string('p23_2', 5)->nullable();
            $table->string('p24_1', 5)->nullable();
            $table->string('p24_2', 5)->nullable();
            $table->string('p25_1', 5)->nullable();
            $table->string('p25_2', 5)->nullable();
            $table->string('p26_1', 5)->nullable();
            $table->string('p26_2', 5)->nullable();
            $table->string('p27_1', 5)->nullable();
            $table->string('p27_2', 5)->nullable();
            $table->string('p28_1', 5)->nullable();
            $table->string('p28_2', 5)->nullable();
            $table->string('p29_1', 5)->nullable();
            $table->string('p29_2', 5)->nullable();
            $table->string('p30_1', 5)->nullable();
            $table->string('p30_2', 5)->nullable();
            $table->string('p31_1', 5)->nullable();
            $table->string('p31_2', 5)->nullable();
            $table->string('p32_1', 5)->nullable();
            $table->string('p32_2', 5)->nullable();
            $table->string('p33_1', 5)->nullable();
            $table->string('p33_2', 5)->nullable();
            $table->string('p34_1', 5)->nullable();
            $table->string('p34_2', 5)->nullable();
            $table->string('p35_1', 5)->nullable();
            $table->string('p35_2', 5)->nullable();
            $table->string('p36_1', 5)->nullable();
            $table->string('p36_2', 5)->nullable();
            $table->string('p37_1', 5)->nullable();
            $table->string('p37_2', 5)->nullable();
            $table->string('p38_1', 5)->nullable();
            $table->string('p38_2', 5)->nullable();
            $table->string('p39_1', 5)->nullable();
            $table->string('p39_2', 5)->nullable();
            $table->string('p40_1', 5)->nullable();
            $table->string('p40_2', 5)->nullable();
            $table->string('p41_1', 5)->nullable();
            $table->string('p41_2', 5)->nullable();
            $table->string('p42_1', 5)->nullable();
            $table->string('p42_2', 5)->nullable();
            $table->string('p43_1', 5)->nullable();
            $table->string('p43_2', 5)->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('attachment_sixes');
    }
};
