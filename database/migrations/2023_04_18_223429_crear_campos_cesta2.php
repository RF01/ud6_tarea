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
        Schema::table('cestas', function (Blueprint $table) {
            //
            $table->integer('tipo_producto');
            $table->string('nombre');
            $table->float('pvp');
            $table->float('cantidad');
        });
    }

   /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cestas');
    }
};
