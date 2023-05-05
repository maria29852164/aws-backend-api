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
        Schema::table('section_content', function (Blueprint $table) {
            $table->unsignedBigInteger('carousel_id')->nullable();
            $table->foreign('carousel_id')->references('id')->on('carousel_content');
        });
        Schema::table('hero_content', function (Blueprint $table) {
            $table->unsignedBigInteger('carousel_id')->nullable();
            $table->foreign('carousel_id')->references('id')->on('carousel_content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
