<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('standings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('league_id')->constrained('leagues')->onDelete('cascade');  // Veza sa ligom
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');  // Igrač
            $table->integer('points');  // Broj poena
            $table->integer('matches_played');  // Broj odigranih mečeva
            $table->integer('wins');  // Broj pobeda
            $table->integer('losses');  // Broj poraza
            $table->integer('goals_for');  // Golovi postignuti
            $table->integer('goals_against');  // Golovi primljeni
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('standings');
    }
};
