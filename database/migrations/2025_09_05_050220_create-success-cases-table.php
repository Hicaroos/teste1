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
        Schema::create('success_table', function (Blueprint $table) {
            $table->id();
            $table->string('company_name'); 
            $table->string('company_logo')->nullable(); 
            $table->string('sector')->nullable(); 
            $table->foreignId('post_id')->unique()->constrained('posts')->onDelete('cascade'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
