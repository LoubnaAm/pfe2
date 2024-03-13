<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id()->autoIncrement;
            $table->string('image')->nullable();
            $table->string('type');
            $table->integer('price');
            $table->string('description');
            $table->string('adresse');
            $table->integer('sqft');
            $table->integer('numbed');
            $table->integer('numdouch');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
