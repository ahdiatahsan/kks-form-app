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
        Schema::create('attachment_twos', function (Blueprint $table) {
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
            $table->string('p35', 100)->nullable();
            $table->string('p36', 100)->nullable();
            $table->string('p37', 100)->nullable();
            $table->string('p38', 100)->nullable();
            $table->string('p39', 100)->nullable();
            $table->string('p40', 100)->nullable();
            $table->string('p41', 100)->nullable();
            $table->string('p42', 100)->nullable();
            $table->string('p43', 100)->nullable();
            $table->string('p44', 100)->nullable();
            $table->string('p45', 100)->nullable();
            $table->string('p46', 100)->nullable();
            $table->string('p47', 100)->nullable();
            $table->string('p48', 100)->nullable();
            $table->string('p49', 100)->nullable();
            $table->string('p50', 100)->nullable();
            $table->string('p51', 100)->nullable();
            $table->string('p52', 100)->nullable();
            $table->string('p53', 100)->nullable();
            $table->string('p54', 100)->nullable();
            $table->string('p55', 100)->nullable();
            $table->string('p56', 100)->nullable();
            $table->string('p57', 100)->nullable();
            $table->string('p58', 100)->nullable();
            $table->string('p59', 100)->nullable();
            $table->string('p60', 100)->nullable();
            $table->string('p61', 100)->nullable();
            $table->string('p62', 100)->nullable();
            $table->string('p63', 100)->nullable();
            $table->string('p64', 100)->nullable();
            $table->string('p65', 100)->nullable();
            $table->string('p66', 100)->nullable();
            $table->string('p67', 100)->nullable();
            $table->string('p68', 100)->nullable();
            $table->string('p69', 100)->nullable();
            $table->string('p70', 100)->nullable();
            $table->string('p71', 100)->nullable();
            $table->string('p72', 100)->nullable();
            $table->string('p73', 100)->nullable();
            $table->string('p74', 100)->nullable();
            $table->string('p75', 100)->nullable();
            $table->string('p76', 100)->nullable();
            $table->string('p77', 100)->nullable();
            $table->string('p78', 100)->nullable();
            $table->string('p79', 100)->nullable();
            $table->string('p80', 100)->nullable();
            $table->string('p81', 100)->nullable();
            $table->string('p82', 100)->nullable();
            $table->string('p83', 100)->nullable();
            $table->string('p84', 100)->nullable();
            $table->string('p85', 100)->nullable();
            $table->string('p86', 100)->nullable();
            $table->string('p87', 100)->nullable();
            $table->string('p88', 100)->nullable();
            $table->string('p89', 100)->nullable();
            $table->string('p90', 100)->nullable();
            $table->string('p91', 100)->nullable();
            $table->string('p92', 100)->nullable();
            $table->string('p93', 100)->nullable();
            $table->string('p94', 100)->nullable();
            $table->string('p95', 100)->nullable();
            $table->string('p96', 100)->nullable();
            $table->string('p97', 100)->nullable();
            $table->string('p98', 100)->nullable();
            $table->string('p99', 100)->nullable();
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
        Schema::dropIfExists('attachment_twos');
    }
};
