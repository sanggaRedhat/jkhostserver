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
        Schema::create('guarantees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->comment('nama terjamin');
            $table->string('guaranteedate')->comment('tanggal terjamin mulai dijamin')->nullable();
            $table->string('plaf')->comment('plafond kredit')->nullable();
            $table->string('vol')->comment('volume penjaminan')->nullable();
            $table->string('tenor')->comment('jangka waktu kredit')->nullable();
            $table->string('realisasi')->comment('tanggal realisasi kredit')->nullable();
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
        Schema::dropIfExists('guarantee_hits');
    }
};
