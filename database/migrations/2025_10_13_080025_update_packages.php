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
        Schema::table('packages', function (Blueprint $table) {
            $table->dropColumn('notes');
        });
        Schema::dropIfExists('package_features');
        Schema::dropIfExists('package_activities');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
