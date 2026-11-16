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
        Schema::create('notes', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('source')->nullable();
            // $table->json('tags')->nullable();
            $table->string('book')->nullable();
            $table->string('chapter')->nullable();
            $table->string('verse')->nullable();
            $table->timestamps();
        });
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('tag_name')->unique();
            $table->timestamps();
        });
        Schema::create('note_tag', function (Blueprint $table) {
            $table->id();
        
            $table->foreignId('note_id')
                ->constrained()
                ->cascadeOnDelete();
        
            $table->foreignId('tag_id')
                ->constrained()
                ->cascadeOnDelete();
        
            $table->unique(['note_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notes');
        Schema::dropIfExists('tags');
        Schema::dropIfExists('note_tag');
    }
};
