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
        Schema::create('attachment_fours', function (Blueprint $table) {
            $table->id();
            $table->string('p1_1')->nullable();
            $table->string('p1_2')->nullable();
            $table->string('p2_1')->nullable();
            $table->string('p2_2')->nullable();
            $table->string('p3_1')->nullable();
            $table->string('p3_2')->nullable();
            $table->string('p4_1')->nullable();
            $table->string('p4_2')->nullable();
            $table->string('p5_1')->nullable();
            $table->string('p5_2')->nullable();
            $table->string('p6_1')->nullable();
            $table->string('p6_2')->nullable();
            $table->string('p7_1')->nullable();
            $table->string('p7_2')->nullable();
            $table->string('p8_1')->nullable();
            $table->string('p8_2')->nullable();
            $table->string('p9_1')->nullable();
            $table->string('p9_2')->nullable();
            $table->string('p10_1')->nullable();
            $table->string('p10_2')->nullable();
            $table->string('p11_1')->nullable();
            $table->string('p11_2')->nullable();
            $table->string('p12_1')->nullable();
            $table->string('p12_2')->nullable();
            $table->string('p13_1')->nullable();
            $table->string('p13_2')->nullable();
            $table->string('p14_1')->nullable();
            $table->string('p14_2')->nullable();
            $table->string('p15_1')->nullable();
            $table->string('p15_2')->nullable();
            $table->string('p16_1')->nullable();
            $table->string('p16_2')->nullable();
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
        Schema::dropIfExists('attachment_fours');
    }
};
