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
        Schema::table('works',function (Blueprint $table) {
            $table->unsignedBigInteger('worktypes_id');
            $table->foreign('worktypes_id')->references('id')->on('worktypes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('works', function (Blueprint $table) {
            // Reverse the changes made in the up method
            $table->dropForeign(['worktypes_id']);
            $table->dropColumn('worktypes_id');
        });
    }
};
