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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('dni', 8)->unique();
            $table->string('nombres', 80);
            $table->string('apellidos', 80);
            $table->string('direccion', 150)->nullable();

            /*Relaciones entre tablas genero y cargo a empleado*/
            $table->unsignedBigInteger('charges_id');
            $table->foreign('charges_id')->references('id')->on('charges')->onDelete('cascade');

            $table->unsignedBigInteger('genders_id');
            $table->foreign('genders_id')->references('id')->on('genders')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
