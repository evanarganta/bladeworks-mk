<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('piket_gurus', function (Blueprint $table) {
            $table->id();
            $table->string('nama_guru');
            $table->string('pos');
            $table->string('shift');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('piket_gurus');
    }
};
