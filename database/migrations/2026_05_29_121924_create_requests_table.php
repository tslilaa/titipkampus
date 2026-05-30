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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('pemohon_id')
                ->constrained('users')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('runner_id')
                ->nullable()
                ->constrained('users')
                ->cascadeOnUpdate()
                ->nullOnDelete();

            $table->foreignId('kategori_id')
                ->constrained('categories')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('lokasi_awal_id')
                ->constrained('locations')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->foreignId('lokasi_tujuan_id')
                ->constrained('locations')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->text('deskripsi_barang');

            $table->decimal('nominal_tip', 10, 2);

            $table->enum('status', ['Pending', 'Taken', 'On Way', 'Done'])
                ->default('Pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};