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
        Schema::create('jeeps', function (Blueprint $table) {
            $table->id();
            $table->string('jnumber');
            $table->string('driver')->nullable();
            $table->time('begin')->format('H:i')->nullable();
            $table->time('end')->format('H:i')->nullable();
            $table->string('notification')->nullable();
            $table->enum('status', ['approve', 'pending', 'decline']);
            $table->timestamps();
        }); 
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jeeps');
    }
};
