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
        Schema::create('advertisements', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug');

            // Add category_id as a foreign key
            $table->foreignId('category_id')
                ->constrained('advertisement_categories')
                ->onDelete('cascade'); // Optional: cascade delete advertisements when a category is deleted

            $table->longText('content');
            $table->string('opening_hours');
            $table->string('location');
            $table->string('website_url')->nullable();
            $table->integer('status')->default(0);
            $table->timestamp('published_at')->nullable();
            $table->timestamp('modified_at')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('advertisements');
    }
};
