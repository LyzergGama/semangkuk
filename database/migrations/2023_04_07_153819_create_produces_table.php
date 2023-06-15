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
        Schema::create('produces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name')->unique()->required();
            $table->integer('price')->nullable()->unsigned();
            $table->integer('stock')->nullable()->unsigned();
            $table->integer('calories')->nullable()->unsigned();
            $table->integer('protein')->nullable()->unsigned();
            $table->integer('sugar')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produces');
    }
};
