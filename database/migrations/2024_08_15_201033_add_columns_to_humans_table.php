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
        Schema::table('humans', function (Blueprint $table) {
            $table->text('Area_of_experties')->nullable();
            $table->text('organization2')->nullable();
            $table->text('working_interest')->nullable();
            $table->text('job')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('humans', function (Blueprint $table) {
            //
        });
    }
};
