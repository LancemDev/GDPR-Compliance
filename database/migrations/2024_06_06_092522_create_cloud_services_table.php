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
        Schema::create('cloud_services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('account_linked')->default(false);
            $table->string('resource_monitoring_status')->nullable();
            $table->string('compliance_check_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cloud_services');
    }
};
