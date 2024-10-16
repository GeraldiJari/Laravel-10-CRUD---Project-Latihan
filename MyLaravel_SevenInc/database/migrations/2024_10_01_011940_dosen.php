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
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id")->nullable(false);
            $table->unsignedBigInteger("kelas_id")->nullable(true);
            $table->integer("kode_dosen")->nullable(false);
            $table->string("nip", 18)->nullable(false);
            $table->string("name", 100)->nullable(false);
            $table->timestamps();


            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("kelas_id")->references("id")->on("kelas");
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
