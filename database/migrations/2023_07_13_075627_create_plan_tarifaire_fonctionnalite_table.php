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
        Schema::create('fonctionnalite_plan_tarifaire', function (Blueprint $table) {
            $table->foreignId('plan_tarifaire_id');
            $table->foreignId('fonctionnalite_id');

            $table->primary(['plan_tarifaire_id', 'fonctionnalite_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_tarifaire_fonctionnalite');
    }
};
