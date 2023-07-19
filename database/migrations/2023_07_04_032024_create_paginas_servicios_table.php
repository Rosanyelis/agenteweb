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
        Schema::create('paginas_servicios', function (Blueprint $table) {
            $table->id();
            $table->string('title_es');
            $table->string('title_en');
            $table->string('title_fr');
            $table->text('paragraph_es_1');
            $table->text('paragraph__es_2');
            $table->text('paragraph_es_3');
            $table->text('paragraph_en_1');
            $table->text('paragraph__en_2');
            $table->text('paragraph_en_3');
            $table->text('paragraph_fr_1');
            $table->text('paragraph__fr_2');
            $table->text('paragraph_fr_3');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paginas_servicios');
    }
};
