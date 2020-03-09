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
                'name' => 'あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '長崎あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '長崎あじ　真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '長崎あじ  袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'アイルランドあじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'オランダあじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'オランダあじ 真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '韓国あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '無添加　あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'フランス　あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'カレイ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'さんま',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'えぼ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '金目 BOX',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '金目 真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'かます',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => 'ホッケ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '桜干し',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'name' => '西京漬け',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('middle_categories')->insert($middleCategoriesOfFirstBigCategory);

        $middleCategoriesOfSecondBigCategory = [
            [
                'big_category_id' => 2,
                'name' => 'さば',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'さば 真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'さば 醬油　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'さば 次品',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'さば 板真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '板真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '醤油正子',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'ホンダ醤油',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'アイルランド',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '丸あじ（宮崎）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '真ホッケ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '真ホッケ サンワ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '真ホッケ 醤油',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '真ホッケ 次品',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '赤魚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '赤魚 醬油',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '赤魚 旨甘干し',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => 'かね清',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ 開き　有頭',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ 有頭',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ (差し込み)',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ 醤油',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '縞ホッケ 真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => 'あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => 'あじ 醬油',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
            ,
            [
                'big_category_id' => 2,
                'name' => '桜干し',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('middle_categories')->insert($middleCategoriesOfSecondBigCategory);


        $middleCategoriesOfThirdBigCategory = [
            [
                'big_category_id' => 3,
                'name' => 'あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'オランダ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'オランダ 生協（原料）オランダ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'オランダ 袋（製品）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'オランダ パック',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '丸あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '幸祥',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '千代田',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'イイダ(千代田）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '東武  （千代田）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '西友（千代田）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '東市',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => 'いなげや',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '緑茶',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '福井中央',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '塩こうじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'name' => '染野屋　真空',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];
        DB::table('middle_categories')->insert($middleCategoriesOfThirdBigCategory);
    }
}
