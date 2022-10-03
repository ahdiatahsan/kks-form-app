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
        Schema::create('note_threes', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->string('question');
            $table->string('answer')->nullable();
            $table->string('score')->nullable();
            $table->string('attachment_pdf')->nullable();
            $table->string('attachment_img')->nullable();
            $table->text('note')->nullable();
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
        Schema::dropIfExists('note_threes');
    }
};
