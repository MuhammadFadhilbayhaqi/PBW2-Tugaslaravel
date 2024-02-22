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
        Schema::create('detail_transactions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('transaction_id'); // transactionId
            $table->unsignedInteger('collection_id'); // collectionId
            $table->date('tanggal_kembali'); // tanggalKembali
            $table->tinyInteger('status'); // status (anda bisa menyesuaikan jenis datanya)
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_transactions');
    }
};
