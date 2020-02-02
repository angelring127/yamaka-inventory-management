<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateStockManagementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_managements', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('出荷/製造ID');
            $table->unsignedBigInteger('big_category_id')->comment('場所タイプID');
            $table->unsignedBigInteger('middle_category_id')->comment('納品場所ID');
            $table->unsignedBigInteger('item_id')->comment('商品ID');
            $table->integer('stock_status')->comment('出荷:1 製造:2');
            $table->timestamps();
            $table->integer('deleted')->default(0)->comment('削除状態');

            // set foreign
            $table->foreign('big_category_id')->references('id')->on('big_categories');
            $table->foreign('middle_category_id')->references('id')->on('middle_categories');
            $table->foreign('item_id')->references('id')->on('items');
        });

        // テーブルにコメント追加
        DB::statement("ALTER TABLE middle_categories comment '出荷/製造管理テーブル'");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_managements');
    }
}
