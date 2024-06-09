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
        Schema::create("pekerjaan",function(Blueprint $table){
            $table->id("id_pekerjaan")->primary();
            $table->string("username",12);
            $table->string("perusahaan")->nullable();
            $table->string("nama_pekerjaan")->nullable();
            $table->string("alamat_perusahaan")->nullable();
            $table->string("deskripsi_pekerjaan")->nullable();
            $table->date("mulai_bekerja");
            $table->date("selesai_bekeja");

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
