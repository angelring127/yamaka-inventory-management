<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRecordIdToStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 保存順番を削除修正する為カーラムを追加
        Schema::table('stock_managements', function (Blueprint $table) {
            $table->unsignedBigInteger('record_id')->after('item_id')->comment('在庫登録番号');


            $table->foreign('record_id')->references('id')->on('records');
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
            $table->dropColumn('record_id');
        });
    }
}
