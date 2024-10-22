<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fixtures', function (Blueprint $table) {
            $table->id();
            $table->foreignId('week_id')->constrained('weeks')->onDelete('cascade');  // Veza sa kolom
            $table->integer('result_team_1');  // Rezultat prvog tima
            $table->integer('result_team_2');  // Rezultat drugog tima
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fixtures');
    }
};
