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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->integer(column: 'group_id')->default(value: null);
            $table->string(column:'surname')->default(value: '');
            $table->string(column:'name')->default(value: '');
            $table->dateTime(column:'created_at')->default(value: time());
            $table->dateTime(column:'updated_at')->default(value: time());
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
