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
        Schema::table('hives', function (Blueprint $table) {
            $table->unsignedBigInteger('apiary_id'); // Nombre del campo de la clave foránea
            $table->foreign('apiary_id')->references('id')->on('apiaries'); // 'apiarios' es el nombre de la tabla relacionada
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hives', function (Blueprint $table) {
            $table->dropForeign(['apiary_id']);
            $table->dropColumn('apiary_id');
        });
    }
};
