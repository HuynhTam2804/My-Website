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
        Schema::table('purchase_invoices_details', function (Blueprint $table) {
            $table->foreignId('purchase_invoices')->after('purchase_price')->constrained(
                table: 'purchase_invoices',
                indexName: 'import_details_imports_id'
            );
            $table->foreignId('products_id')->after('purchase_invoices_id')->constrained(
                table: 'products',
                indexName: 'purchase_invoices_details_products_id'
            );
            $table->foreignId('colors_id')->constrained(
                table: 'colors',
                indexName: 'purchase_invoices_details_colors_id'
            );
            $table->foreignId('sizes_id')->constrained(
                table: 'sizes',
                indexName: 'purchase_invoices_details_sizes_id'
            );
            $table->foreignId('status_id')->default(1)->constrained(
                table: 'status',
                indexName: 'purchase_invoices_details_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('purchase_invoices_details', function (Blueprint $table) {
            $table->dropForeign(['purchase_invoices_id', 'products_id', 'colors_id', 'sizes_id', 'status_id']);

            $table->dropColumn(['purchase_invoices_id ', 'products_id', 'colors_id', 'sizes_id', 'status_id']);
        });
    }
};
