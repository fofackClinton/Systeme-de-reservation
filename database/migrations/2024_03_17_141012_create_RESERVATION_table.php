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
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('ID_RESERVATION');
            $table->unsignedInteger('ID_CHAMBRE')->index('i_fk_reservation_chambre');
            $table->unsignedBigInteger('ID')->index('i_fk_reservation_client');
            $table->integer('prix');
            $table->char('Statut',32);
            $table->integer('Durer');
            $table->date('DATE_DEBUT');
            $table->date('DATE_FIN');
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
        Schema::dropIfExists('reservation');
    }
};
