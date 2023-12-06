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
        Schema::table('export_details', function (Blueprint $table) {
            $table->foreignId('exports_id')->constrained(
                table: 'exports', indexName: 'export_details_exports_id'
            );
            $table->foreignId('products_id')->constrained(
                table: 'products', indexName: 'export_details_products_id'
            );
            $table->foreignId('discounts_id')->constrained(
                table: 'discounts', indexName: 'export_details_discounts_id'
            );
            $table->foreignId('status_id')->constrained(
                table: 'status', indexName: 'cart_details_status_id'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('export_details', function (Blueprint $table) {
            $table->dropForeign(['exports_id','products_id','discounts_id','status_id']);

            $table->dropColumn(['exports_id','products_id','discounts_id','status_id']);
        });
    }
};
