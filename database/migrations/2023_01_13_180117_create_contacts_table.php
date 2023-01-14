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
        Schema::create('contacts', function (Blueprint $table)
        {
            $table->id();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('naming')->unique();
            $table->string('legal_address')->unique();
            $table->string('OGRN')->unique();
            $table->string('INN')->unique();
            $table->string('KPP')->unique();
            $table->date('date_reg')->unique()->default('03.03.2011');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
};
