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
        Schema::table('reservation', function (Blueprint $table) {
            $table->foreign(['ID_CHAMBRE'], 'RESERVATION_ibfk_1')->references(['ID_CHAMBRE'])->on('chambre')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['ID'], 'RESERVATION_ibfk_2')->references(['ID'])->on('users')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation', function (Blueprint $table) {
            $table->dropForeign('RESERVATION_ibfk_1');
            $table->dropForeign('RESERVATION_ibfk_2');
        });
    }
};
