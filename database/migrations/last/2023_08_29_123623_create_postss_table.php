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
        Schema::create('postss', function (Blueprint $table) {
            $table->id();
            $table->integer('uid');
            $table->integer('active');
            $table->text('title');
            $table->LONGTEXT('body');
            $table->date('postdate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postss');
    }
};
