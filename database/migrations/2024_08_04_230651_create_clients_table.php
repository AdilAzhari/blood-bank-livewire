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
        if (Schema::hasTable('clients')) {
            return;
        }

        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('phone', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('name', 255);
            $table->boolean('is_active')->default(1);
            $table->string('api_token', 60)->unique()->nullable();
            $table->string('last_donation_date');
            $table->date('d_o_b');
            $table->string('pin_code', 255)->nullable();
            $table->enum('status',['active','inactive']);

            $table->foreignId('blood_type_id')->constrained()->cascadeOnDelete();
            $table->foreignId('city_id')->constrained('city')->cascadeOnDelete();
            $table->softDeletes();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
