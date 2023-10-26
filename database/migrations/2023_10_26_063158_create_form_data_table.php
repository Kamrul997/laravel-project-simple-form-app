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
        Schema::create('form_data', function (Blueprint $table) {
            $table->id();
            $table->string('task_title');
            $table->string('task_description');
            $table->string('task_startDate');
            $table->string('task_deadline');
            $table->string('select_maping');
            $table->string('select_priority');
            $table->string('select_user');
            $table->string('task_remarks');
            $table->string('task_links');
            $table->string('task_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_data');
    }
};
