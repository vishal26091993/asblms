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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();

            $table->string('title');

            $table->string('slug')->unique();

            $table->text('description')->nullable();

            $table->string('thumbnail')->nullable();

            $table->string('category')->nullable();

            $table->enum('level', [
                'Beginner',
                'Intermediate',
                'Advanced',
            ])->default('Beginner');

            $table->integer('duration_hours')->default(0);

            $table->integer('total_weeks')->default(4);

            $table->decimal('price', 10, 2)
                  ->default(0);

            $table->tinyInteger('status')
                  ->default(1)
                  ->comment('1=Active,0=Inactive');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('programs');
    }
};
