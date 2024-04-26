<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('devenir', function (Blueprint $table) {
            $table->foreign(['ID_RESERVATION'], 'DEVENIR_ibfk_1')->references(['ID_RESERVATION'])->on('reservation')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID_OCCUPATION'], 'DEVENIR_ibfk_2')->references(['ID_OCCUPATION'])->on('occupation')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('devenir', function (Blueprint $table) {
            $table->dropForeign('DEVENIR_ibfk_1');
            $table->dropForeign('DEVENIR_ibfk_2');
        });
    }
};
