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
        Schema::create('stonks', function (Blueprint $table) {
            $table->id();
            $table->string("imagePath");
            $table->string("title");
            $table->text("description");
            $table->float("price_small", 8, 2);	
            $table->float("price_medium", 8, 2);
            $table->float("price_large", 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stonks');
    }
};
