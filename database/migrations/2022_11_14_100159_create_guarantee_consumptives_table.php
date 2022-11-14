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
        Schema::create('guarantee_consumptives', function (Blueprint $table) {
            $table->id();
            $table->foreignId('guarantee_id')->constrained();
            $table->string('couplename')->comment('wife/husband name')->nullable();
            $table->string('gender',1)->comment('gender');
            $table->string('address')->comment('wife/husband name')->nullable();
            $table->string('postcode')->comment('wife/husband name')->nullable();
            $table->string('dateofborn')->comment('wife/husband name')->nullable();
            $table->string('coupledateofborn')->comment('wife/husband name')->nullable();
            $table->string('phonenumber')->comment('wife/husband name')->nullable();
            $table->string('identitynumber')->comment('wife/husband name')->nullable();
            $table->string('instancename')->comment('wife/husband name')->nullable();
            $table->string('agunan')->comment('wife/husband name')->nullable();
            $table->string('agunannumber')->comment('wife/husband name')->nullable();
            $table->string('agunanvalue')->comment('wife/husband name')->nullable();
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
        Schema::dropIfExists('guarantee_consumptives');
    }
};
