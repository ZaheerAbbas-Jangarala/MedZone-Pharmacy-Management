<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('medicine_name');
            $table->string('medicine_sku')->unique();
            $table->string('medicine_weight');
            $table->string('medicine_category');
            $table->string('medicine_speciality');
            $table->string('medicine_origin');
            $table->string('medicine_manufacturer');
            $table->double('medicine_price', 10, 2);
            $table->double('medicine_mrp', 10, 2);
            $table->double('manufacturer_price', 10, 2);
            $table->double('medicine_stockbox');
            $table->dateTime('medicine_expire_date');
            $table->string('medicine_status');
            $table->string('medicine_image');
            $table->text('medicine_description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
