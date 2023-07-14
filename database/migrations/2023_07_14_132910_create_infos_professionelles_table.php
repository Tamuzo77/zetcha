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
        Schema::create('infos_professionelles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carte_id');
            $table->string('mail')->nullable();
            $table->string('phone_number1')->nullable();
            $table->string('phone_number2')->nullable();
            $table->string('enterprise_name')->nullable();
            $table->string('enterprise_address')->nullable();
            $table->string('lien_facebook')->nullable();
            $table->string('lien_twitter')->nullable();
            $table->string('lien_linkedin')->nullable();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('infos_professionelles');
    }
};
