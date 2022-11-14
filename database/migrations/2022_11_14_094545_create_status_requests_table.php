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
        Schema::create('status_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained();
            $table->string('codename')->comment('code of status request on api server parner');
            $table->string('name')->comment('name of status request on api server partner');
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
        Schema::dropIfExists('status_requests');
    }
};
