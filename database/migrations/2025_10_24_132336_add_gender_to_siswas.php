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
        Schema::table(table: 'siswas', callback: function (Blueprint $table) {
            $table->dropColumn(columns: 'address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table(table: 'siswas', callback: function (Blueprint $table) {
            $table->string(column: 'address')->nullable();
        });
    }
};
