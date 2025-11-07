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
        Schema::create('pdf_books', function (Blueprint $table) {
            $table->id();
            $table->foreignId('department_id')->constrained()->onDelete('cascade');
            $table->foreignId('semister_id')->constrained()->onDelete('cascade');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('author')->nullable();
            $table->string('category')->nullable();
            $table->text('description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('pdf_file'); // File path of the book
            $table->decimal('price', 10, 2)->default(0.00);
            $table->boolean('is_free')->default(false);
            $table->integer('downloads')->default(0);
            $table->boolean('published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pdf_books');
    }
};
