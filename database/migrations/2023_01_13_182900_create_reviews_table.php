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
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->date('date_write');
            $table->timestamps();
            $table->tinyInteger('rating',false, true);
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->mediumText('advantages')->nullable();
            $table->mediumText('disadvantages')->nullable();
            $table->mediumText('comment')->nullable();
            $table->bigInteger('product_id')->unsigned()->index();
            $table->foreign('product_id')
                ->references('id')->on('products')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
};
