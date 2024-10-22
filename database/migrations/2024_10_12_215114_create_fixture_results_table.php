<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fixture_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('fixture_id')->constrained('fixtures')->onDelete('cascade');  // Veza sa Fixture
            $table->foreignId('player_id')->constrained('players')->onDelete('cascade');  // Igrač
            $table->foreignId('partner_id')->constrained('players')->onDelete('cascade');  // Partner igrača
            $table->integer('score_for');  // Golovi postignuti
            $table->integer('score_against');  // Golovi primljeni
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fixture_results');
    }
};
