<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToStockManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('stock_managements', function (Blueprint $table) {
            // 出荷の場合いつの在庫を出荷したのか確認
            $table->unsignedBigInteger('shipment_id')->nullable()->after('record_id')->comment('在庫登録番号');
            $table->unsignedBigInteger('currentstock_count')->nullable()->after('stock_count')->comment('健在商品数');
            $table->foreign('shipment_id')->references('id')->on('records');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('stock_managements', function (Blueprint $table) {
            $table->dropColumn('shipment_id');
            $table->dropColumn('currentstock_count');
        });
    }
}
