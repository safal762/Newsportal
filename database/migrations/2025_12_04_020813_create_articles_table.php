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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->boolean('views')->default(0);
            $table->string('image')->nullable();
            $table->longText('description');
            $table->boolean('visible')->default(true);
            $table->boolean('trending')->default(false);
            $table->string('meta_keywords')->nullable();
            $table->longText('title_description')->nullable();
            $table->longText('writer_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
