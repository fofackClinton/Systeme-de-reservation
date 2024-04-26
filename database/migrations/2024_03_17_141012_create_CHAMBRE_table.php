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
        Schema::create('chambre', function (Blueprint $table) {
            $table->increments('ID_CHAMBRE');
            $table->string('NOM_CHAMBRE')->nullable();
            $table->char('TYPE_CHAMBRE',32);
            $table->char('IMAGE',100);
            $table->text('DESCRIPTION');
            $table->integer('PRIX');
            $table->integer('NOMBRE_LITS');
            $table->boolean('TELEVISION');
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
        Schema::dropIfExists('chambre');
    }
};
