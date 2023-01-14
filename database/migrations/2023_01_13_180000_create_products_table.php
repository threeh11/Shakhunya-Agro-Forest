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
        Schema::create('products', function (Blueprint $table) {
            $table->id()->from(1001);
            $table->string('name')->unique();
            $table->string('price')->default('Цена договорная');
            $table->string('city')->default('Йошкар-ола');
            $table->mediumText('description');
            $table->mediumText('path_to_images');
            $table->float('rating', 1, 1, true)->default(0.0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
