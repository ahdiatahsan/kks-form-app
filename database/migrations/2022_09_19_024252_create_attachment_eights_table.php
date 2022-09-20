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
        Schema::create('attachment_eights', function (Blueprint $table) {
            $table->id();
            $table->string('p1', 100)->nullable();
            $table->string('p2', 100)->nullable();
            $table->string('p3', 100)->nullable();
            $table->string('p4', 100)->nullable();
            $table->string('p5', 100)->nullable();
            $table->string('p6', 100)->nullable();
            $table->string('p7', 100)->nullable();
            $table->string('p8', 100)->nullable();
            $table->string('p9', 100)->nullable();
            $table->string('p10', 100)->nullable();
            $table->string('p11', 100)->nullable();
            $table->string('p12', 100)->nullable();
            $table->string('p13', 100)->nullable();
            $table->string('p14', 100)->nullable();
            $table->string('p15', 100)->nullable();
            $table->string('p16', 100)->nullable();
            $table->string('p17', 100)->nullable();
            $table->string('p18', 100)->nullable();
            $table->string('p19', 100)->nullable();
            $table->string('p20', 100)->nullable();
            $table->string('p21', 100)->nullable();
            $table->string('p22', 100)->nullable();
            $table->string('p23', 100)->nullable();
            $table->string('p24', 100)->nullable();
            $table->string('p25', 100)->nullable();
            $table->string('p26', 100)->nullable();
            $table->string('p27', 100)->nullable();
            $table->string('p28', 100)->nullable();
            $table->string('p29', 100)->nullable();
            $table->string('p30', 100)->nullable();
            $table->string('p31', 100)->nullable();
            $table->string('p32', 100)->nullable();
            $table->string('p33', 100)->nullable();
            $table->string('p34', 100)->nullable();
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
        Schema::dropIfExists('attachment_eights');
    }
};
