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
        Schema::table('data', function (Blueprint $table) {
            //clave foranea para dispositivos
            $table->unsignedBigInteger('device_id')->after('value')->nullable();
            $table->foreign('device_id')->references('id')->on('devices');
            //clave foranea para variables
            $table->unsignedBigInteger('variable_id')->after('device_id')->nullable();
            $table->foreign('variable_id')->references('id')->on('variables');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data', function (Blueprint $table) {
            //clave foranea para dispositivos
            $table->dropForeign(['device_id']);
            $table->dropColumn('device_id');
             //clave foranea para variables
            $table->dropForeign(['variable_id']);
            $table->dropColumn('variable_id');
        });
    }
};
