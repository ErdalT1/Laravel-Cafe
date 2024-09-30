<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('menu_item_id'); // Seçilen menü öğesi
            $table->unsignedBigInteger('table_number'); // Masa numarası
            $table->timestamps();

            // menu_item_id'yi menu_items tablosuna bağla
            $table->foreign('menu_item_id')->references('id')->on('menu_items')->onDelete('cascade');
        });
    }


    public function down(): void {
        Schema::dropIfExists('orders');
    }
};
