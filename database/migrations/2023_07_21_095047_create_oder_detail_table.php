<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oder_detail', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('tenSP');
            $table->string('mau');
            $table->string('tenKhachHang');
            $table->string('phone_number', 10)->unique();
            $table->string('address')->nullable();
            $table->string('ngayLapHoaDon');
            $table->string('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oder_detail');
    }
};
