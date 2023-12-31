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
        Schema::table('exports', function (Blueprint $table) {
            $table->foreignId('admins_id')->constrained(
                table: 'admins', indexName: 'exports_admins_id'
            );
            $table->foreignId('users_id')->constrained(
                table: 'users', indexName: 'exports_users_id'
            );
            $table->foreignId('status_id')->constrained(
                table: 'status', indexName: 'exports_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('exports', function (Blueprint $table) {
            $table->dropForeign(['admins_id','users_id','status_id']);

            $table->dropColumn(['admins_id','users_id','status_id']);
        });
    }
};
