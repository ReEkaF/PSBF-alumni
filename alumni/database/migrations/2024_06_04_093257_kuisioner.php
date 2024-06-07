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
        Schema::create("kuisioner", function (Blueprint $table){
            $table->id('id_kuisioner');
            $table->string('kuisioner1')->nullable();
            $table->string('kuisioner2')->nullable();
            $table->string('kuisioner3')->nullable();
            $table->string('kuisioner4')->nullable();
            $table->string('kuisioner5')->nullable();
            $table->string('kuisioner6')->nullable();
            $table->string('kuisioner7')->nullable();
            $table->string('kuisioner8')->nullable();
            $table->string('kuisioner9')->nullable();
            $table->string('kuisioner10')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
