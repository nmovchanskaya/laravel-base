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
        Schema::create('group', function (Blueprint $table) {
            $table->id();
            $table->string(column:'title')->default(value: '');
            $table->date(column:'start_from')->default(value: null);
            $table->boolean(column:'is_active')->default(value: false);
            $table->dateTime(column:'created_at')->default(value: time());
            $table->dateTime(column:'updated_at')->default(value: time());
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group');
    }
};
