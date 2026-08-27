<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nisn');
            $table->string('nama');
            $table->integer('tugas');
            $table->integer('uts');
            $table->integer('uas');
            $table->decimal('nilai_akhir', 5, 1);
            $table->string('predikat');
            $table->string('status');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('nilais');
    }
};
