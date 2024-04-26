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
        Schema::table('occupation', function (Blueprint $table) {
            $table->foreign(['ID_type'],'Occupation_ibfk_3')->references(['ID_type'])->on('typeoccupation')->onUpdate('no action')->onDelete('no action');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('typeoccupation', function(Blueprint $table){
            $table->dropForeign('Occupation_ibfk_3');

        });
    }
};
