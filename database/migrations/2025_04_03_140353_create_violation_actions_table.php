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
        Schema::create('violation_actions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('violation_id');
            $table->dateTime('record_date');
            $table->dateTime('action_date');
            $table->string('action_taken', 500);
            $table->text('other_remarks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('violation_actions');
    }
};
