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
        Schema::create('escuelaprofesional', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 85);
            $table->unsignedBigInteger('facultad_id');
            $table->foreign('facultad_id')->references('id')->on('facultad')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('escuelaprofesional');
    }
};
