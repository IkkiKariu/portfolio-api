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
        Schema::create('personal_info', function (Blueprint $table) {
            $table->uuid('id')->primary();

            $table->uuid('user_id')->unique();
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->string('first_name', 128);
            $table->string('last_name', 128)->nullable();
            $table->integer('age', unsigned: true)->nullable();
            $table->text('about')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_info');
    }
};
