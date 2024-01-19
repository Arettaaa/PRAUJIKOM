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
        Schema::create('ppdis', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('nisn')->unique();
            $table->string('name');
            $table->string('school');
            $table->enum('gender', ['Perempuan', 'Laki-laki']);
            $table->string('major');
            $table->string('email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ppdis');
    }
};
