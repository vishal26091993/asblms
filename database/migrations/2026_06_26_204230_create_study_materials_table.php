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
        Schema::create('study_materials', function (Blueprint $table) {
            $table->id();

            $table->foreignId('program_id')
                  ->nullable()
                  ->constrained('programs')
                  ->nullOnDelete();

            $table->string('title');

            $table->text('description')
                  ->nullable();

            $table->enum(
                'type',
                [
                    'PDF',
                    'DOC',
                    'EXCEL',
                    'PPT',
                    'VIDEO',
                    'YOUTUBE',
                    'UDEMY',
                ]
            );

            $table->string('file')
                  ->nullable();

            $table->string('video_url')
                  ->nullable();

            $table->integer('week_no')
                  ->default(1);

            $table->integer('sort_order')
                  ->default(0);

            $table->tinyInteger('status')
                  ->default(1);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_materials');
    }
};
