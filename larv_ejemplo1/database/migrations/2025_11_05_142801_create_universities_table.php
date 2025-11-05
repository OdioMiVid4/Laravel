<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('universities', function (Blueprint $table) {
            $table->id();
            $table->string('nombreuniversidad', 85);
            $table->unsignedBigInteger('guys_id');

            /*Tabla tipouniversidad */

            $table->foreign('guys_id')->references('id')->on('guys')->onDelete('cascade');
            $table->date('fechacreacion');
            $table->unsignedBigInteger('headquarters_id');

            /*Tabla sedes*/
            $table->foreign('headquarters_id')->references('id')->on('headquarters')->onDelete('cascade');
            $table->unsignedBigInteger('faculties_id');

            /*Tabla facultades*/
            $table->foreign('faculties_id')->references('id')->on('faculties')->onDelete('cascade');
            $table->unsignedBigInteger('modalities_id');

            /*Tabla modalidades */
            $table->foreign('modalities_id')->references('id')->on('modalities')->onDelete('cascade');
            $table->unsignedBigInteger('shifts_id');

            /*Tabla turnos */
            $table->foreign('shifts_id')->references('id')->on('shifts')->onDelete('cascade');
            $table->timestamps();

            
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universities');
    }
};
