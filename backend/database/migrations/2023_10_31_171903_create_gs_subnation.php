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
        Schema::create('gs_subnation', function (Blueprint $table) {
            $table->id();
            $table->integer('issf_core_id');
            $table->text('name');
            $table->integer('country_id');
            $table->text('type')->nullable();
            $table->text('type_other')->nullable();
            $table->point('subnation_point')->nullable();

            $table->foreign('issf_core_id')->references('issf_core_id')->on('issf_core');
            $table->foreign('country_id')->references('country_id')->on('country');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gs_subnation');
    }
};