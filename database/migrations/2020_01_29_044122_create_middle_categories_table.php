<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateMiddleCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('middle_categories', function (Blueprint $table) {
            $table->bigIncrements('id')->comment('納品場所ID');
            $table->unsignedBigInteger('big_category_id')->comment('場所タイプID');
            $table->string('name')->comment('納品場所名');
            $table->timestamps();
            $table->softDeletes()->comment('削除状態');

            // set foreign
            $table->foreign('big_category_id')->references('id')->on('big_categories');

        });

        DB::statement("ALTER TABLE middle_categories comment '納品場所'");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('middle_categories');
    }
}
