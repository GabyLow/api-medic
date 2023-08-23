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
        Schema::create('appoints', function (Blueprint $table) {
            $table->id();
            $table->dateTime('appointDate');
            $table->string('appointReason');
            $table->string('doctorType');

            $table->unsignedBigInteger('patient_id');

            $table->foreign('patient_id')->references('id')->on('patients');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appoints');
    }
};
