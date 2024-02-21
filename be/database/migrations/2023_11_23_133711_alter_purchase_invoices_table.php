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
        Schema::table('purchase_invoices', function (Blueprint $table) {

            $table->foreignId('admins_id')->after('total_price')->constrained(
                table: 'admins',
                indexName: 'purchase_invoices_admins_id'
            );
            $table->foreignId('providers_id')->after('admins_id')->constrained(
                table: 'providers',
                indexName: 'purchase_invoices_users_id'
            );
            $table->foreignId('status_id')->default(1)->after('providers_id')->constrained(
                table: 'status',
                indexName: 'purchase_invoices_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_invoices', function (Blueprint $table) {
            $table->dropForeign(['admins_id', 'providers_id', 'status_id']);

            $table->dropColumn(['admins_id', 'providers_id', 'status_id']);
        });
    }
};
