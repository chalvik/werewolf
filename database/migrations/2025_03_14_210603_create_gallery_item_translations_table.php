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
        Schema::create('gallery_item_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gallery_item_id')->unsigned();
            $table->string('locale')->index();
            $table->string('title');
            $table->unique(['gallery_item_id', 'locale']);
            $table->foreign('gallery_item_id')->references('id')->on('gallery_items')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_item_translations');
    }
};
