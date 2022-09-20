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
            $table->string('p1')->nullable();
            $table->string('p2')->nullable();
            $table->string('p3')->nullable();
            $table->string('p4')->nullable();
            $table->string('p5')->nullable();
            $table->string('p6')->nullable();
            $table->string('p7')->nullable();
            $table->string('p8')->nullable();
            $table->string('p9')->nullable();
            $table->string('p10')->nullable();
            $table->string('p11')->nullable();
            $table->string('p12')->nullable();
            $table->string('p13')->nullable();
            $table->string('p14')->nullable();
            $table->string('p15')->nullable();
            $table->string('p16')->nullable();
            $table->string('p17')->nullable();
            $table->string('p18')->nullable();
            $table->string('p19')->nullable();
            $table->string('p20')->nullable();
            $table->string('p21')->nullable();
            $table->string('p22')->nullable();
            $table->string('p23')->nullable();
            $table->string('p24')->nullable();
            $table->string('p25')->nullable();
            $table->string('p26')->nullable();
            $table->string('p27')->nullable();
            $table->string('p28')->nullable();
            $table->string('p29')->nullable();
            $table->string('p30')->nullable();
            $table->string('p31')->nullable();
            $table->string('p32')->nullable();
            $table->string('p33')->nullable();
            $table->string('p34')->nullable();
            $table->string('p35')->nullable();
            $table->string('p36')->nullable();
            $table->string('p37')->nullable();
            $table->string('p38')->nullable();
            $table->string('p39')->nullable();
            $table->string('p40')->nullable();
            $table->string('p41')->nullable();
            $table->string('p42')->nullable();
            $table->string('p43')->nullable();
            $table->string('p44')->nullable();
            $table->string('p45')->nullable();
            $table->string('p46')->nullable();
            $table->string('p47')->nullable();
            $table->string('p48')->nullable();
            $table->string('p49')->nullable();
            $table->string('p50')->nullable();
            $table->string('p51')->nullable();
            $table->string('p52')->nullable();
            $table->string('p53')->nullable();
            $table->string('p54')->nullable();
            $table->string('p55')->nullable();
            $table->string('p56')->nullable();
            $table->string('p57')->nullable();
            $table->string('p58')->nullable();
            $table->string('p59')->nullable();
            $table->string('p60')->nullable();
            $table->string('p61')->nullable();
            $table->string('p62')->nullable();
            $table->string('p63')->nullable();
            $table->string('p64')->nullable();
            $table->string('p65')->nullable();
            $table->string('p66')->nullable();
            $table->string('p67')->nullable();
            $table->string('p68')->nullable();
            $table->string('p69')->nullable();
            $table->string('p70')->nullable();
            $table->string('p71')->nullable();
            $table->string('p72')->nullable();
            $table->string('p73')->nullable();
            $table->string('p74')->nullable();
            $table->string('p75')->nullable();
            $table->string('p76')->nullable();
            $table->string('p77')->nullable();
            $table->string('p78')->nullable();
            $table->string('p79')->nullable();
            $table->string('p80')->nullable();
            $table->string('p81')->nullable();
            $table->string('p82')->nullable();
            $table->string('p83')->nullable();
            $table->string('p84')->nullable();
            $table->string('p85')->nullable();
            $table->string('p86')->nullable();
            $table->string('p87')->nullable();
            $table->string('p88')->nullable();
            $table->string('p89')->nullable();
            $table->string('p90')->nullable();
            $table->string('p91')->nullable();
            $table->string('p92')->nullable();
            $table->string('p93')->nullable();
            $table->string('p94')->nullable();
            $table->string('p95')->nullable();
            $table->string('p96')->nullable();
            $table->string('p97')->nullable();
            $table->string('p98')->nullable();
            $table->string('p99')->nullable();
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
        Schema::dropIfExists('tatanan_twos');
    }
};
