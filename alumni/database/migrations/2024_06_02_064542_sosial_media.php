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
        Schema::create("sosial_media", function (Blueprint $table){
            $table->id("id_sosmed")->primary();
            $table->string("username",12);
            $table->string("nama_akun_sosmed");
            $table->string("jenis_sosmed");
            $table->foreign("username")->references("username")->on("lulusan")->constrained();

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
