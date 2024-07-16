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
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title')->nullable()->change();
            $table->text('description')->nullable()->change();
            $table->string('thumb', 512)->nullable()->change();
            $table->string('series')->nullable()->change();
            $table->date('sale_date')->nullable()->change();
            $table->string('type')->nullable()->change();
            $table->json('artists')->nullable()->change();
            $table->json('writers')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->string('title')->nullable(false)->change();
            $table->text('description')->nullable(false)->change();
            $table->string('thumb', 512)->nullable(false)->change();
            $table->string('series')->nullable(false)->change();
            $table->date('sale_date')->nullable(false)->change();
            $table->string('type')->nullable(false)->change();
            $table->json('artists')->nullable(false)->change();
            $table->json('writers')->nullable(false)->change();
        });
    }
};
