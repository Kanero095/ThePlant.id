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
        Schema::create('plants', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('color')->nullable();
            $table->string('verif')->nullable();
            $table->string('verifer')->nullable();
            $table->string('nator');
            $table->string('email');
            $table->string('nowa');
            $table->string('nata');
            $table->string('lata')->nullable();
            $table->string('gamta')->nullable();
            $table->string('katam');
            $table->string('klatam')->nullable();
            $table->string('lotam')->nullable();
            $table->longText('deletam');
            $table->longText('desitam')->nullable();
            $table->string('litam')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plants');
    }
};
