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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('nim',20)->unique();
            $table->string('nama',100);
            $table->string('email',100)->unique();
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin',1)->comment('L=laki-laki, P=perempuan');
            $table->string('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
