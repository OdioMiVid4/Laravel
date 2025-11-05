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
        Schema::create('universidad', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 85);
            $table->unsignedBigInteger('tipouniversidad_id');

            /*Tabla tipo universidad */

            $table->foreign('tipouniversidad_id')->references('id')->on('tipouniversidad')->onDelete('cascade');
            $table->date('fechacreacion');
            $table->unsignedBigInteger('sede_id');

            /*Tabla sedes */
            $table->foreign('sede_id')->references('id')->on('sede')->onDelete('cascade');
            $table->unsignedBigInteger('facultad_id');

            /*Tabla facultades*/
            $table->foreign('facultad_id')->references('id')->on('facultad')->onDelete('cascade');
            $table->unsignedBigInteger('modalidad_id');

            /*Tabla modalidades */
            $table->foreign('modalidad_id')->references('id')->on('modalidad')->onDelete('cascade');
            $table->unsignedBigInteger('turno_id');

            /*Tabla turnos */
            $table->foreign('turno_id')->references('id')->on('turno')->onDelete('cascade');
            $table->string('descripcion', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universidad');
    }
};
