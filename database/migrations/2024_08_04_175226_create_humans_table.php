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
        Schema::create('humans', function (Blueprint $table) {
            $table->id();

            $table->string('image')->nullable();
            $table->string('name')->nullable();
            $table->text('education')->nullable();
            $table->text('organization')->nullable();
            $table->text('designation')->nullable();
            $table->text('experience')->nullable();
            $table->text('gender')->nullable();
            $table->text('country')->nullable();

            $table->text('motivation')->nullable();
            $table->text('achievements')->nullable();
            $table->text('leadership_Experience')->nullable();
            $table->text('fb_url')->nullable();
            $table->text('linkdin_url')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('humans');
    }
};
