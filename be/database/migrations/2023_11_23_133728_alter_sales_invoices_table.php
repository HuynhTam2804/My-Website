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
        Schema::table('sales_invoices', function (Blueprint $table) {
            $table->foreignId('users_id')->after('total_price')->constrained(
                table: 'users',
                indexName: 'sales_invoices_users_id'
            );
            $table->foreignId('discounts_id')->after('users_id')->nullable()->constrained(
                table: 'discounts',
                indexName: 'sales_invoices_details_discounts_id'
            );
            $table->foreignId('status_sales_id')->after('discounts_id')->default(1)->constrained(
                table: 'status_sales',
                indexName: 'sales_invoices_status_sales_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales_invoices', function (Blueprint $table) {
            $table->dropForeign(['users_id', 'discounts_id', 'status_sales_id']);

            $table->dropColumn(['users_id', 'discounts_id', 'status_sales_id']);
        });
    }
};
