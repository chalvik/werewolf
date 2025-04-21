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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->longText('title');
            $table->longText('short_content');
            $table->longText('content');
            $table->longText('seo_title')->nullable();
            $table->longText('seo_keywords')->nullable();
            $table->longText('seo_description')->nullable();
            $table->string('image')->nullable();
            $table->foreignIdFor(\App\Models\Gallery::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};
