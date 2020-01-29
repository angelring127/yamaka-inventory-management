<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('商品ID');
            $table->unsignedBigInteger('big_category_id')->comment('場所タイプID');
            $table->unsignedBigInteger('middle_category_id')->comment('納品場所ID');
            $table->timestamps();
            $table->integer('deleted')->default(0)->comment('削除状態');

            // set foreign
            $table->foreign('big_category_id')->references('id')->on('big_categories');
            $table->foreign('middle_category_id')->references('id')->on('middle_categories');


        });

        DB::statement("ALTER TABLE middle_categories comment '製品'");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
