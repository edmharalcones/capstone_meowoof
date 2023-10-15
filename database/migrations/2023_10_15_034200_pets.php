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
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->string('pet',300);
            $table->string('cover', 300);
            $table->text('link');

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
