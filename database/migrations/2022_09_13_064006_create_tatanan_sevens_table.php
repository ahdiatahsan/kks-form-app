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
        Schema::create('tatanan_sevens', function (Blueprint $table) {
            $table->id();
            $table->string('p1', 5)->nullable();
            $table->string('p2', 5)->nullable();
            $table->string('p3', 5)->nullable();
            $table->string('p4', 5)->nullable();
            $table->string('p5', 5)->nullable();
            $table->string('p6', 5)->nullable();
            $table->string('p7', 5)->nullable();
            $table->string('p8', 5)->nullable();
            $table->string('p9', 5)->nullable();
            $table->string('p10', 5)->nullable();
            $table->string('p11', 5)->nullable();
            $table->string('p12', 5)->nullable();
            $table->string('p13', 5)->nullable();
            $table->string('p14', 5)->nullable();
            $table->string('p15', 5)->nullable();
            $table->string('p16', 5)->nullable();
            $table->string('p17', 5)->nullable();
            $table->string('p18', 5)->nullable();
            $table->string('p19', 5)->nullable();
            $table->string('p20', 5)->nullable();
            $table->string('p21', 5)->nullable();
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
        Schema::dropIfExists('tatanan_sevens');
    }
};
