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
            $table->unsignedBigInteger('apiary_id')->after('name')->nullable();
            $table->foreign('apiary_id')->references('id')->on('apiaries');
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
