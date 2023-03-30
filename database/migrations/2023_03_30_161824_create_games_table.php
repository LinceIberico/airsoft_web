<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->foreignId('game_category_id')->constrained('game_category');
            $table->string('name');
            $table->text('description')->nullable();
            $table->text('rules')->nullable();
            $table->text('equipment')->nullable();
            $table->date('start_game');
            $table->date('end_game');
            $table->float('price');
            $table->string('place');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
