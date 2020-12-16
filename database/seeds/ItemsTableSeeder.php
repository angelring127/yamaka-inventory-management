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
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => '   特　18×4  白',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => 'BOX14×4 黄緑',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => 'ホッケ4×5　緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '赤魚F　2枚×15P　黒赤',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 3,
                'name' => 'オランダ18×4　ピンク',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎16×4　黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎16×4　オレンジ',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎14×4　ピンク',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '長崎18×4　紫',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '静岡オランダ　IQF３０枚',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => '金目鯛　BOX８×5　青',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'index'=> 7,
                'name' => '金目６×5　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 5,
                'name' => 'オランダ10×4　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 5,
                'name' => '長崎あじ20枚×4　紫',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '網金アジ3枚×16P　青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '網金さんま2枚×16P　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => 'かます　IQF　8枚　ピンク',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　　　　 　　10枚　黄',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　　　　 　　15枚　黒',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　　　　 　　20枚　緑',
                'index' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　　　　　　 30枚　茶',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　　　　　　 50枚　白',
                'index' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　2枚×15P　黄',
                'index' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　2枚×15　緑黄',
                'index' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　無添加20枚　緑',
                'index' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '韓国アジIQF30枚　黒',
                'index' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '韓国アジIQF25枚　黄緑',
                'index' => 13,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => 'オランダ2枚×15P　青',
                'index' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '金目中島IQF20枚　緑',
                'index' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　IQF15枚　紫',
                'index' => 17,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　IQF20　空色',
                'index' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　IQF20　紫',
                'index' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => 'IQF20オレンジ　シール無し',
                'index' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '魚力1枚真空×10袋　紫',
                'index' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => 'カレイIQF30　緑茶緑',
                'index' => 23,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 7,
                'name' => '無添加あじ2枚×35枚　黒',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 7,
                'name' => '長崎あじIQF30　紫',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 7,
                'name' => '韓国あじ40枚　青',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '長崎BOX15×4　赤',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '特上あじ15×5　ヤマカ黒',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '長崎40×４　水色',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '長崎3枚×15P　ヤマカ黒',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 9,
                'name' => 'ｵﾗﾝﾀﾞ10×5　ｵﾚﾝｼﾞ',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 9,
                'name' => 'ｵﾗﾝﾀﾞ12×5　水色',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 10,
                'name' => '無添加あじ4枚×15袋',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 10,
                'name' => '小田急3枚×15袋　青',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 10,
                'name' => '対馬海域あじIQF30枚水色',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => '生22×4　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => 'フランス16×4　白',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => 'ｵﾗﾝﾀﾞ15×4 ｵﾚﾝｼﾞ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => '半折 8×12　白',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => '半折6×12Ｐ　黄',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 12,
                'name' => 'アイルランドIQF35　赤',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 12,
                'name' => 'アイルランドIQF25　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 13,
                'name' => '長崎　IQF40枚　ピンク',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 13,
                'name' => '　　　13×4段ボール　白',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 13,
                'name' => '長崎　BOX　10×5　黄',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 13,
                'name' => '長崎　BOX15×4　青',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF40　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '長崎　10×5　青',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 15,
                'name' => '長崎BOX13×4　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 15,
                'name' => 'あじ2枚真空×10袋　茶',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 15,
                'name' => '真ホッケ８×5　黄',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'フランス14×4　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 17,
                'name' => '銀だら　８×12　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 17,
                'name' => 'シマホッケ9×12　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 18,
                'name' => '長崎10×５　黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => '長崎15×4　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => '長崎あじ40×4　ピンク',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => 'オランダ22×4　黄緑',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => 'ホッケ4×5　ピンク',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 20,
                'name' => '長崎IQF50枚　紫',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 20,
                'name' => '長崎BOX11×4　黄緑',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 20,
                'name' => '長崎22×5　水色',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 20,
                'name' => '韓国50枚　オレンジ',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 21,
                'name' => '宮城　IQF8枚　紫',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 21,
                'name' => '宮城　IQF10枚　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 21,
                'name' => '新金目IQF8　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 21,
                'name' => '新金目IQF10　青',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 21,
                'name' => '新金目IQF16　水色',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 21,
                'name' => '金目IQF40枚　白',
                'index' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 22,
                'name' => 'アジ3枚×20袋　ヤマカ黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 23,
                'name' => '金目1枚×15　青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 23,
                'name' => 'あじ1枚×30　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 23,
                'name' => 'カレイ１枚×30袋　赤',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 24,
                'name' => '長崎あじIQF40　オレンジ',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 25,
                'name' => '無添加キンメ1枚真空×10　オレンジ',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 25,
                'name' => '無添加あじ２枚真空×10　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 25,
                'name' => '韓国あじ3枚袋×15　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 26,
                'name' => 'あじ2枚×15袋　青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 27,
                'name' => 'あじIQF40　ピンク',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('items')->insert($items);

        $items2 = [
            [
                'big_category_id' => 2,
                'middle_category_id' => 28,
                'name' => 'さば塩2枚×20袋　ヤマカ黒',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 28,
                'name' => 'さば醤油2枚×20袋　ヤマカ醤油',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => 'ノルさば開き　20枚　紫',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 30,
                'name' => 'ノルさば開き20枚　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 31,
                'name' => 'さば開き骨なし20枚　ヤマカ黒',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 31,
                'name' => '宮城さば開き　20枚　ピンク',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 31,
                'name' => '　　　　　　　　20枚　紫',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 32,
                'name' => '1枚×10袋　紫',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => 'サバ　2枚×15P　小　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '赤魚F2枚×15P　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '真ﾎｯｹ1枚×15P　ピンク',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => 'オランダ2枚×15P　水色',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => 'サバ2枚×15P大　黄緑',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => 'シマホッケ2枚×15P　オレンジ',
                'index' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => 'さば2枚×15P黒（川崎）',
                'index' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => '千葉さばF2枚×15P黄（山梨)',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => '赤魚F2枚×15P紫（山梨）',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => '長崎あじ2枚15Pヤマカ黄(東水）',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => 'サバ2枚×15P水色(京都）',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 35,
                'name' => 'サバF2枚×15P　青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 35,
                'name' => 'サバ切身3枚×15P　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 35,
                'name' => 'あじ2枚×15P　赤',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 35,
                'name' => 'あじ3枚×15P　緑',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 36,
                'name' => '千葉サバ開き25枚　黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 36,
                'name' => '千葉さば開き40枚　黒',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '25枚　水色',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '45枚　青',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '50枚　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '12枚　緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '16枚　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '18枚　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '20枚　ピンク',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'ノルさばF　30枚　青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'ノルさばF　40枚　水色',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'ノルさばF　少少40枚　水色',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'ノルさば開き　25枚　青',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'ノルさば　20枚　青',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '赤魚F　　30枚　ピンク',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '赤魚F　　50枚　黄緑',
                'index' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'オランダアジ　40枚　赤',
                'index' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 40,
                'name' => '縞ホッケ開き　20枚　ヤマカ醤油',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 41,
                'name' => '真ほっけ15枚　空色',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 42,
                'name' => 'さば開き骨なし20枚ヤマカ醤油',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 43,
                'name' => '縞ホッケF40枚　赤',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 43,
                'name' => '韓国あじ50枚　黒',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 44,
                'name' => 'アイルランド50赤・白(羽野）',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 44,
                'name' => 'サバFカマ無し50枚　オレンジ',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '20枚　水色',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '30枚　ヤマカ黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '15枚　黄350/400ｇ',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '20枚　黄200/250ｇ',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '20枚　青',
                'index' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '50枚　オレンジ',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 46,
                'name' => '20枚　紫',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 46,
                'name' => '40枚　ピンク',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 47,
                'name' => '大水1枚×10袋　水色',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 47,
                'name' => 'ライフ1枚×20袋　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '頭付き　10枚　黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '3頭付き　12枚　青',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '頭付き　15枚　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '頭付き　20枚　紫',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '頭付き　25枚　赤',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '無頭10枚　赤',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '無頭20枚　黄緑(千代田）',
                'index' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '無頭20枚　赤',
                'index' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => '無頭開き　　25枚　赤　',
                'index' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 48,
                'name' => 'F　50枚　紫',
                'index' => 11,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 49,
                'name' => '千葉サバ1枚×20袋　緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 49,
                'name' => '縞ホッケ1枚×20袋　オレンジ',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 50,
                'name' => '真ホッケ　20枚　緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 50,
                'name' => 'さばF　　40枚　白　　',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '８枚　黄緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '１０枚　ﾋﾟﾝｸ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '１０枚　緑',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '12枚（第一）ヤマカ黒　',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '１2枚　青',
                'index' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '１2枚　黒',
                'index' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '20枚　オレンジ',
                'index' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '20枚　水色',
                'index' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '20枚　黒　(京都）',
                'index' => 16,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '25枚　青',
                'index' => 18,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => 'F16枚　黄緑',
                'index' => 20,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => 'F20枚　緑',
                'index' => 21,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => 'F40枚　黄',
                'index' => 22,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 51,
                'name' => '2枚×15P　黒(東急）',
                'index' => 24,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 52,
                'name' => 'F　25枚　黄緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 52,
                'name' => 'F　40枚　紫',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 52,
                'name' => 'F　小小40枚　黄緑',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 52,
                'name' => 'F　2枚×15P大　黄',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 52,
                'name' => 'F　2枚×15P小　黄',
                'index' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 52,
                'name' => 'サバ切身80枚　赤・黒',
                'index' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 53,
                'name' => 'さばF醤油　40枚　茶',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 53,
                'name' => '真ホッケ　30枚　茶',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 54,
                'name' => '千葉さば　40枚　黄緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 55,
                'name' => '真ﾎｯｹ　1枚×15袋',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'big_category_id' => 3,
                'middle_category_id' => 56,
                'name' => 'オランダ６０枚　水色　',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 57,
                'name' => '小アジ3枚×６P 青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 57,
                'name' => 'さばF2枚×15Ｐ　水色',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 57,
                'name' => '韓国ｱｼﾞ２枚×15Ｐ　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 57,
                'name' => '赤魚F　2枚×15P　黒赤',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 58,
                'name' => '縞ホッケ2枚×15　緑黄 ',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 58,
                'name' => '韓国あじ3枚×15P　黒',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 58,
                'name' => '赤魚1枚×15P　ﾋﾟﾝｸ',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 58,
                'name' => '金目1枚×15P　こげ茶',
                'index' => 4,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 59,
                'name' => '丸あじ2枚×15P　黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 60,
                'name' => 'スーパー　50枚　黒',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 61,
                'name' => 'あじ2枚×15P　緑黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 61,
                'name' => '真ホッケ2枚×15P　紫',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 62,
                'name' => 'あじ2枚×15P　オレンジ',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 62,
                'name' => '真ホッケ3枚×15P　紙緑',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 62,
                'name' => 'さば2枚×15P　オレンジ',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'あじ2枚×15P　水色',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'ホッケ2枚×15P　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'さば2枚×15P　青',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 64,
                'name' => 'あじ2枚×15P　茶',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 64,
                'name' => '真ﾎｯｹ2枚×15P　茶',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 65,
                'name' => '長崎上アジ2枚×20Ｐ　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 66,
                'name' => '新長崎あじ3枚×15P　黄緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 66,
                'name' => '長崎あじ2枚×20P紙　緑',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 67,
                'name' => 'アジ60枚 スーパー　青',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 67,
                'name' => 'アジ60枚　ジャスコ　緑',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 68,
                'name' => 'オランダ3枚×40袋　赤',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 68,
                'name' => 'オランダ3枚×40袋　緑',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 68,
                'name' => 'オランダ4枚×30袋　白',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 69,
                'name' => '新オランダ4枚×15P　紙緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 70,
                'name' => 'イイダ　金目１枚×８Ｐ　紫',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 71,
                'name' => '韓国あじ2枚×20P　黒',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 71,
                'name' => 'あじ3枚×15P　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 72,
                'name' => '金目1枚P×15　黄緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 73,
                'name' => '真ﾎｯｹ　２枚×15P　水色',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
[
                'big_category_id' => 3,
                'middle_category_id' => 74,
                'name' => 'オンダアジ20枚白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 75,
                'name' => 'あじ2枚P×15P　白',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 76,
                'name' => '金目3枚P×15　黒',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 76,
                'name' => '長崎あじ2枚×15P　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 77,
                'name' => '中骨取りあじ2枚×15P　オレンジ',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 78,
                'name' => '真ほっけ３枚P×15　緑',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 78,
                'name' => '第一ホッケ2枚×15Pヤマカ黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 79,
                'name' => '長崎大20　赤',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 80,
                'name' => '韓国あじ2枚20P　ピンク',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 80,
                'name' => '韓国あじ大2枚P×15　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 80,
                'name' => 'ホッケ　大1枚P×15　紫',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 81,
                'name' => 'あじ　キミサワ無添加30枚オレンジ',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 81,
                'name' => 'あじ　農塩　20枚　黄',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 81,
                'name' => '新サバ醤油　50枚　黄',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 82,
                'name' => '真ホッケ2枚×15P　ピンク',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 82,
                'name' => 'キンメ2枚×15P　緑',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 82,
                'name' => 'あじ3枚×15P　茶',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 82,
                'name' => '千葉サバ2枚×15P　ヤマカ',
                'index' => 3,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 83,
                'name' => 'あじ2枚×15P　ピンク',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 83,
                'name' => 'ほっけ1枚×15P　赤',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 83,
                'name' => 'さば2枚×15P　青',
                'index' => 2,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 84,
                'name' => 'あじ3枚×15P　ヤマカ黄',
                'index' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 84,
                'name' => '縞ホッケ開き2枚×15P　黒',
                'index' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        DB::table('items')->insert($items2);
    }
}
