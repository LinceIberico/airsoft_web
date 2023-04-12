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
        Schema::create('ask_surveys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ask_id')->constrained('asks');
            $table->foreignId('survey_id')->constrained('surveys');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ask_surveys');
    }

    public function ask()
    {
        return $this->belongsToMany(Ask::class);
    }

    public function survey()
    {
        return $this->belongsToMany(Survey::class);
    }
};
