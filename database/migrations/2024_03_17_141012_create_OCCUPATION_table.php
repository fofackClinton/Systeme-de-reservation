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
        Schema::create('occupation', function (Blueprint $table) {
            $table->increments('ID_OCCUPATION');
            $table->unsignedInteger('ID_CHAMBRE')->index('i_fk_occupation_chambre');
            $table->unsignedBigInteger('ID')->index('i_fk_occupatio_chambre');
            $table->unsignedInteger('ID_type')->index('i_fk_occupation_type');
            $table->integer('Durer');
            $table->integer('montat');
            $table->integer('montatpayer');
            $table->integer('restepayer');
            $table->char('Statut',32);
            $table->date('DATE_DEBUT');
            $table->date('DATE_FIN');
            $table->time('HEURE_DEBUT');
            $table->time('HEURE_FIN');
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
        Schema::dropIfExists('occupation');
    }
};
