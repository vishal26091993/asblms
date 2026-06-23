<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('student_profiles', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained()->cascadeOnDelete();

            $table->string('photo')->nullable();

            $table->string('mobile')->nullable();

            $table->date('dob')->nullable();

            $table->string('gender')->nullable();

            $table->string('college_name')->nullable();

            $table->string('course')->nullable();

            $table->string('specialization')->nullable();

            $table->string('passing_year')->nullable();

            $table->string('address')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_profiles');
    }
};
