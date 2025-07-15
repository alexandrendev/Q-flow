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
        Schema::create('medical_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained('patients')->onDelete('cascade');
            $table->boolean('has_allergies')->default(false);
            $table->string('allergies')->nullable();
            $table->boolean('has_medical_conditions')->default(false);
            $table->string('medical_conditions')->nullable();
            $table->boolean('has_medications')->default(false);
            $table->string('medications')->nullable();
            $table->boolean('has_surgeries')->default(false);
            $table->string('surgeries')->nullable();
            $table->boolean('has_family_history')->default(false);
            $table->string('family_history')->nullable();
            $table->string('notes');
            $table->string('priority');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_records');
    }
};
