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
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->enum('type', \App\Enums\Driver\Type::values())->nullable();
            $table->enum('vehicle', \App\Enums\Driver\Vehicle::values())->nullable();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('courier_name');
            $table->string('email')->unique();
            $table->string('phone');
            $table->string('license_plate')->nullable();
            $table->text('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('drivers');
    }
};
