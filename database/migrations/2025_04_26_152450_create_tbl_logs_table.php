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
        Schema::create('tbl_logs', function (Blueprint $table) {
            $table->id();
            $table->string('student_id', 7);
            $table->string('last_name', 55);
            $table->string('first_name', 55);
            $table->string('middle_name', 55)->nullable();
            $table->string('program', 255);
            $table->string('section', 7);
            $table->date('entry_date');
            $table->time('entry_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_tbl_logs');
    }
};