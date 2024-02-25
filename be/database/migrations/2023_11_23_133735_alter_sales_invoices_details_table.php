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
        Schema::table('sales_invoices_details', function (Blueprint $table) {
            $table->foreignId('sales_invoices_id')->after('sales_price')->constrained(
                table: 'sales_invoices',
                indexName: 'sales_invoices_details_sales_invoices_id'
            );
            $table->foreignId('products_id')->after('sales_invoices_id')->constrained(
                table: 'products',
                indexName: 'sales_invoices_details_products_id'
            );
            $table->foreignId('colors_id')->after('products_id')->constrained(
                table: 'colors',
                indexName: 'sales_invoices_details_colors_id'
            );
            $table->foreignId('sizes_id')->after('colors_id')->constrained(
                table: 'sizes',
                indexName: 'sales_invoices_details_sizes_id'
            );
            $table->foreignId('status_id')->default(1)->after('sizes_id')->constrained(
                table: 'status',
                indexName: 'sales_invoices_details_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sales_invoices_details', function (Blueprint $table) {
            $table->dropForeign(['exports_id', 'products_id', 'discounts_id', 'status_id']);

            $table->dropColumn(['exports_id', 'products_id', 'discounts_id', 'status_id']);
        });
    }
};
