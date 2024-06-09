<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**sdwd
     * Run the migrations.
     */
    public function up(): void 
    {
        Schema::create("lulusan", function (Blueprint $table){
            $table->string("username",12)->primary();
            $table->string("password",12);
            $table->string("Nama");
            $table->date("tanggal_lahir");
            $table->string("alamat");
            $table->boolean("jenis_kelamin");
            $table->float("ipk");
            $table->year("tahun_masuk");
            $table->year("tahun_lulus");
            $table->string("prodi");
            $table->string("no_hp")->nullable();
            $table->string("email")->nullable();
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
