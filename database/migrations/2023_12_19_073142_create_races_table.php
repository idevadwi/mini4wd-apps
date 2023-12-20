<?php

use App\Models\Racer;
use App\Models\Tournament;
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
        Schema::create('races', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Tournament::class)->constrained()->onDelete('cascade');
            $table->integer('stage');
            $table->string('track');
            $table->integer('lane_1');
            $table->integer('lane_2');
            $table->integer('lane_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('races');
    }
};
