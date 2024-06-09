<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use League\CommonMark\Reference\Reference;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("postingan",function(Blueprint $table){
            $table->id("id_postingan")->primary();
            $table->string("username",12);
            $table->string("judul")->nullable();
            $table->date("tanggal_posting");
            $table->string("gambar")->nullable();
            $table->string("deskripsi")->nullable();

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
