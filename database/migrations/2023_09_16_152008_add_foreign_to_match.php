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
        Schema::table('match', function (Blueprint $table) {
            $table->foreign('clubs_id', 'clubs_id_fk4')->references('id')
            ->on('clubs')->onUpdate('CASCADE')->onDelete('RESTRICT');
            $table->foreign('rivals_id', 'rivals_id_fk5')->references('id')
            ->on('clubs')->onUpdate('CASCADE')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('match', function (Blueprint $table) {
            $table->dropForeign('clubs_id_fk4');
            $table->dropForeign('rivals_id_fk5');
        });
    }
};
