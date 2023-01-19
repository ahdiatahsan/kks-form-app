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
        Schema::create('tatanan_twos', function (Blueprint $table) {
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
            $table->string('p22', 5)->nullable();
            $table->string('p23', 5)->nullable();
            $table->string('p24', 5)->nullable();
            $table->string('p25', 5)->nullable();
            $table->string('p26', 5)->nullable();
            $table->string('p27', 5)->nullable();
            $table->string('p28', 5)->nullable();
            $table->string('p29', 5)->nullable();
            $table->string('p30', 5)->nullable();
            $table->string('p31', 5)->nullable();
            $table->string('p32', 5)->nullable();
            $table->string('p33', 5)->nullable();
            $table->string('p34', 5)->nullable();
            $table->string('p35', 5)->nullable();
            $table->string('p36', 5)->nullable();
            $table->string('p37', 5)->nullable();
            $table->string('p38', 5)->nullable();
            $table->string('p39', 5)->nullable();
            $table->string('p40', 5)->nullable();
            $table->string('p41', 5)->nullable();
            $table->string('p42', 5)->nullable();
            $table->string('p43', 5)->nullable();
            $table->string('p44', 5)->nullable();
            $table->string('p45', 5)->nullable();
            $table->string('p46', 5)->nullable();
            $table->string('p47', 5)->nullable();
            $table->string('p48', 5)->nullable();
            $table->string('p49', 5)->nullable();
            $table->string('p50', 5)->nullable();
            $table->string('p51', 5)->nullable();
            $table->string('p52', 5)->nullable();
            $table->string('p53', 5)->nullable();
            $table->string('p54', 5)->nullable();
            $table->string('p55', 5)->nullable();
            $table->string('p56', 5)->nullable();
            $table->string('p57', 5)->nullable();
            $table->string('p58', 5)->nullable();
            $table->string('p59', 5)->nullable();
            $table->string('p60', 5)->nullable();
            $table->string('p61', 5)->nullable();
            $table->string('p62', 5)->nullable();
            $table->string('p63', 5)->nullable();
            $table->string('p64', 5)->nullable();
            $table->string('p65', 5)->nullable();
            $table->string('p66', 5)->nullable();
            $table->string('p67', 5)->nullable();
            $table->string('p68', 5)->nullable();
            $table->string('p69', 5)->nullable();
            $table->string('p70', 5)->nullable();
            $table->string('p71', 5)->nullable();
            $table->string('p72', 5)->nullable();
            $table->string('p73', 5)->nullable();
            $table->string('p74', 5)->nullable();
            $table->string('p75', 5)->nullable();
            $table->string('p76', 5)->nullable();
            $table->string('p77', 5)->nullable();
            $table->string('p78', 5)->nullable();
            $table->string('p79', 5)->nullable();
            $table->string('p80', 5)->nullable();
            $table->string('p81', 5)->nullable();
            $table->string('p82', 5)->nullable();
            $table->string('p83', 5)->nullable();
            $table->string('p84', 5)->nullable();
            $table->string('p85', 5)->nullable();
            $table->string('p86', 5)->nullable();
            $table->string('p87', 5)->nullable();
            $table->string('p88', 5)->nullable();
            $table->string('p89', 5)->nullable();
            $table->string('p90', 5)->nullable();
            $table->string('p91', 5)->nullable();
            $table->string('p92', 5)->nullable();
            $table->string('p93', 5)->nullable();
            $table->string('p94', 5)->nullable();
            $table->string('p95', 5)->nullable();
            $table->string('p96', 5)->nullable();
            $table->string('p97', 5)->nullable();
            $table->string('p98', 5)->nullable();
            $table->string('p99', 5)->nullable();
            $table->foreignId('user_id')->nullable()->constrained('users')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignId('setting_id')->nullable()->constrained('settings')->cascadeOnUpdate()->cascadeOnDelete();
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
        Schema::dropIfExists('tatanan_twos');
    }
};
