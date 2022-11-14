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
        Schema::create('send_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('status_request_id')->constrained()->comment('status request sesuai dengan kode yang diberikan oleh server');
            $table->foreignId('partner_id')->constrained()->comment('ambil data yang dibutuhkan di tabel partner');
            $table->foreignId('partner_product_id')->constrained()->comment('Jenis produk yang diajukan');
            $table->string('unit_kerja_cabang');
            $table->string('nama_unit_kerja');
            $table->string('no_aplikasi');
            $table->foreignId('guarantee_id')->constrained();
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
        Schema::dropIfExists('send_requests');
    }
};
