<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBigCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('big_categories', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('場所タイプID');
            $table->string('name', 100)->comment('場所タイプ名');
            $table->string('manager', 100)->comment('担当者');
            $table->timestamps();
            $table->integer('deleted')->default(0)->comment('削除状態');
        });

        DB::statement("ALTER TABLE big_categories comment '場所のタイプ'");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('big_categories');
    }
}
