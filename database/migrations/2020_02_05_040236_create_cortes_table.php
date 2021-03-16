<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cortes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->double('Orden');
            $table->float('Largo');
            $table->float('Ancho');
            $table->String('Proporcion',100);
            $table->float('Recibido');
            $table->float('Consumido');
            $table->float('Retaceria');
            $table->float('Faltante');
            $table->double('Cuerpos');
            $table->double('Lienzos');
            $table->double('Piezas');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cortes');
    }
}
