<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegisteredsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registereds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('apellido');
            $table->string('nombre');
            $table->string('dni');
            $table->string('fechanacimiento');
            $table->string('sexo');
            $table->unsignedBigInteger('localidad_id');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('estadocivil');
            $table->string('ocupacion');
            $table->string('numerocertificadod');
            $table->string('fechaemision');
            $table->string('fechavencimiento');
            $table->string('entidadcertificado');
            $table->string('formacionescolar');
            $table->unsignedBigInteger('situacionresidencial_id');
            $table->string('entornofamiliar');
            $table->unsignedBigInteger('obrasocial_id');
            $table->string('observacion');
            $table->string('numerolegajo');
            $table->string('legajo');
            $table->timestamps();

            $table->foreign('localidad_id')->references('id')->on('locations');
            $table->foreign('situacionresidencial_id')->references('id')->on('residences');
            $table->foreign('obrasocial_id')->references('id')->on('healthinsurances');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registereds');
    }
}
