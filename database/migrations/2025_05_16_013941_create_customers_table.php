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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
    
            // Basic Info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('phone');
    
            // Address
            $table->string('street')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('zip')->nullable();
            $table->string('country')->default('USA');
    
            // Property Info
            $table->string('property_type')->nullable();
            $table->string('lot_size')->nullable();
            $table->boolean('has_sprinkler_system')->default(false);
            $table->string('gate_code')->nullable();
    
          
    
            // Timestamps
            $table->timestamps();

            // Preferences
$table->string('preferred_day')->nullable();
$table->string('preferred_time')->nullable();
$table->string('service_type')->nullable();        
$table->string('service_frequency')->nullable();   
$table->text('notes')->nullable();

        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
