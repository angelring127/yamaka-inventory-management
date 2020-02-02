<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $items = [
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => '京都　16×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => '大阪　18×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => '   特　18×4  白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => '特油つき　18×4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => 'BOX14×4',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => 'ホッケ4×5　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => 'ｵﾗﾝﾀﾞ　食材用　50枚緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '金目12×5紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '金目　15×5　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '金目　12×5　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 3,
                'name' => 'オランダ18×4ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 3,
                'name' => 'オランダ2枚×20袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 3,
                'name' => '金目６×5　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => 'エボ10×5　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎16×4　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎16×4オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎14×4ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎18×4紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '静岡オランダ　IQF３０枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '金目鯛　BOX８×5　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎あじ　IQF50オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '　　　　　　　IQF50　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 5,
                'name' => 'オランダ10×4白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 5,
                'name' => '長崎あじ20×4紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('items')->insert($items);
    }
}
