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
        Schema::create('personal_info_link', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('personal_info_id');
            $table->foreign('personal_info_id')->references('id')->on('personal_info');

            $table->uuid('link_id');
            $table->foreign('link_id')->references('id')->on('links');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_info_link');
    }
};
