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
        Schema::create('devenir', function (Blueprint $table) {
            $table->unsignedInteger('ID_RESERVATION')->index('i_fk_devenir_reservation');
            $table->unsignedInteger('ID_OCCUPATION')->index('i_fk_devenir_occupation');

            $table->primary(['ID_RESERVATION', 'ID_OCCUPATION']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('devenir');
    }
};
