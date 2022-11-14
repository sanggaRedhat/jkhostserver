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
        Schema::create('api_url_partners', function (Blueprint $table) {
            $table->id();
            $table->foreignId('partner_id')->constrained();
            $table->string('urlapi')->comment('url address for api host server');
            $table->string('desciption')->comment('Description of url address for api host server');
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
        Schema::dropIfExists('api_url_partners');
    }
};
