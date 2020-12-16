<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class MiddleCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $middleCategoriesOfFirstBigCategory = [
            [
                'big_category_id' => 1,
                'name' => '　',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '名古屋丸海',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '南都',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '静岡',
                'lows' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '山梨',
                'lows' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '千代田',
                'lows' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '広島',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '東水',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '岐阜',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '東市',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '宮市',
                'lows' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '第一',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '京都',
                'lows' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'うおいち',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '川崎北部',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '千葉',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '西京漬け',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '群馬',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '村清',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'あじ',
                'lows' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '金目鯛',
                'lows' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '染野屋',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '板真空',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '全日食',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '米一',
                'lows' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '緑茶',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '中骨取り',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            
        ];
        DB::table('middle_categories')->insert($middleCategoriesOfFirstBigCategory);

        $middleCategoriesOfSecondBigCategory = [
            [
                'big_category_id' => 2,
                'name' => '染野屋　真空',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '全水',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '横浜　',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '千代田',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '第一シマホッケ　真空',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '正子　醤油',
                'lows' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '醤油　(黒シール）',
                'lows' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '天才ひもの',
                'lows' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '国産さば　塩',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '丸あじ（宮崎）',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '韓国あじ　大',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '醬油干し',
                'lows' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '京都',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '名古屋丸海',
                'lows' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '千代田',
                'lows' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '山梨',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'その他',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '真ホッケ',
                'lows' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '真ﾎｯｹ　サンワ',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '真ﾎｯｹ無添加真空',
                'lows' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '赤魚',
                'lows' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '板真空',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '旨味干し',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ',
                'lows' => 26,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => 'ノルさば　塩',
                'lows' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '次品',
                'lows' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '中骨取り',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '醤油　中骨取り',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('middle_categories')->insert($middleCategoriesOfSecondBigCategory);


        $middleCategoriesOfThirdBigCategory = [
            [
                'big_category_id' => 3,
                'name' => 'ジャスコ',
                'lows' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '東武ストア',
                'lows' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'シール差し込み網金トレイ',
                'lows' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '西川（ライフ用）',
                'lows' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'オランダ',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'ヨーカドー　中骨取り',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '米一　中骨取り',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'マルイチ　中骨取り',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '千代田　中骨取り',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'ダイエー',
                'lows' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'オリンピック',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '生協（原料）',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '生協（製品）',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'ホンダ',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '千代田',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '千代田　（マックス）',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '千代田（マミーマート）',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '東市',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '全日食',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '三和',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '丸海',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '東急',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '真ほっけパック',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'フジ',
                'lows' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '西友',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'マックスバリュー(幸祥）',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '福井中央',
                'lows' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '塩こうじ',
                'lows' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '千代田　新黒金',
                'lows' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('middle_categories')->insert($middleCategoriesOfThirdBigCategory);
    }
}
