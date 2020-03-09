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
                'name' => '横浜　BOX14×4 黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 1,
                'name' => '東水　特上あじ15×5　ヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '京都　BOX10×5　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '群馬　10×5　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '北部　10×5　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '千代田　BOX11×4　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　　13×4白段ボール',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => 'B0X13×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '静岡　14×4ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '東水　BOX15×4赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '綜合　15×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => 'BOX15×4　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　16×4　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　16×4オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　18×4紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '山梨　20×4紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '宮市　生22×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '川崎　22×5　水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　　40×４水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '群馬　IQF30　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　　IQF30　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '京都　IQF40　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '北部　IQF40　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '静岡　IQF50　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '静岡　IQF50　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '　　　　IQF50　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '東水　3枚×15Pヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 2,
                'name' => '千代田網金アジ3枚×16Pヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 3,
                'name' => '千代田あじ3枚×15ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 3,
                'name' => '川崎真空2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 4,
                'name' => 'じゅわっとシール無し25　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 5,
                'name' => 'IQF25　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 5,
                'name' => 'IQF35　赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '宮市　半折6×12Ｐ黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '宮市　半折 8×12P白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '山梨　10×4白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '岐阜　10×5ｵﾚﾝｼﾞ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '岐阜　12×5水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '宮市　15×4 ｵﾚﾝｼﾞ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '南都　18×4ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '静岡　IQF３０ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '　　　　2枚×15P青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 6,
                'name' => '南都　2枚×20袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 7,
                'name' => '宮市　2枚×20袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '　　　　IQF25　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '　　　　IQF30　黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '　　　　IQF40　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '千葉　IQF50　　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 8,
                'name' => '板真空韓国1枚×30袋黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 9,
                'name' => '東水　IQF30',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 9,
                'name' => '東市　4枚×15袋緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 9,
                'name' => '東市　小田急3枚×15袋青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 9,
                'name' => '広島　2枚×35袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 10,
                'name' => '千葉　14×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 10,
                'name' => '宮市　16×4　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => 'カレイIQF20',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 11,
                'name' => 'カレイIQF30　緑茶',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 12,
                'name' => '　　　さんまIQF30　緑黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 12,
                'name' => '網金さんま2枚×16P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 13,
                'name' => '　IQF50　赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '6×5　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '8×5　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '15×5　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '12×5　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF8　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF10　赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF12　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF15　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF18 黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF20　空色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF20　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF20　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '中島IQF20枚緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF40　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => 'IQF40　赤黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '新金目IQF8　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 14,
                'name' => '新金目IQF10　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 15,
                'name' => '魚力　1枚×10袋紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 15,
                'name' => '板　　1枚×15袋青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'IQF8　ピンク　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'IQF10　黄　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'IQF15　黒　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'IQF20　緑　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'IQF30　茶  ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'IQF50　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 16,
                'name' => 'かます2×15P黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 17,
                'name' => '綜合　ホッケ4×5　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 17,
                'name' => '丸海　ホッケ4×5　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 18,
                'name' => '韓国あじ2枚×15袋ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 18,
                'name' => '金目1枚×15袋黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => '銀だら　８切×12P白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => '銀だら　８切×6P白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 1,
                'middle_category_id' => 19,
                'name' => 'シマホッケ　9切×12P黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            
        ];

        DB::table('items')->insert($items);

        $items2 = [
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => '全水ノルさば開き　20枚紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => '横浜ノルさば開き　20枚白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => 'ノルさばF　25枚　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => 'ノルさばF　40枚　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => 'ノルさばF　小小40枚　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => '千代田さば開き骨なし20枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => '千代田宮城さば開き20枚ﾋﾟﾝｸ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => '宮城さば開き20枚　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => '千葉さば開き30枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => 'さばF2枚×15P（大)黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => 'さばF2枚×15P(網)青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 20,
                'name' => 'さばF2枚×15P（小）黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 21,
                'name' => '川崎　2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 21,
                'name' => '川崎醤油　2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => 'ノルさば開き骨なし20枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => 'ノルさば開き　25枚　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => 'ノルさばF大25枚　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => 'ノルさばF　30枚　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => 'ノルさばF　40枚　水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => 'ノルさばF　少少',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => '京都ノルさば2枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 22,
                'name' => '京都ノルさば2枚×15P 水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 23,
                'name' => 'さばF　　40枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 23,
                'name' => 'さばF醤油　40枚　茶',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 24,
                'name' => '千葉サバ1枚×20袋緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 24,
                'name' => '縞ホッケ1枚×20袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 24,
                'name' => '縞ホッケ1枚×20袋 ｵﾚﾝｼﾞ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => 'オランダ2枚×15P　水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => 'さば2枚×15P　小　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => 'さば2枚×15P　大黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => 'さば川崎　2枚×15P黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => '真ホッケ1枚×15Pピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => '縞ホッケ2枚×15Pｵﾚﾝｼﾞ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 25,
                'name' => '赤魚　2枚×15P　赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 26,
                'name' => 'オランダ　2枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 26,
                'name' => 'ノルさば　2枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 26,
                'name' => '赤魚　2枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 27,
                'name' => '羽野　50枚　赤白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 27,
                'name' => '羽野　80枚　赤白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 28,
                'name' => '水色　25枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 28,
                'name' => '黄緑　35枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 28,
                'name' => '青　45枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 28,
                'name' => 'オレンジ　50枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '350/400ｇ　15枚　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '           12枚　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '200/250ｇ　20枚　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '　ライフ　   20枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '　第一　　  20枚　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '250/300g   20枚　水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '300/350ｇ　20枚　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '　千代田    24枚　黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '140/180ｇ　30枚　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '110/140ｇ　40枚　黒　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '　　　　20枚　ヤマカ黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '　　　　30枚　ヤマカ黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '川秀　30枚　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 29,
                'name' => '川秀　30枚　赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 30,
                'name' => '20枚　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 30,
                'name' => '30枚　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 30,
                'name' => '40枚　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 30,
                'name' => '50枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 31,
                'name' => '名古屋　真ほっけ15枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 32,
                'name' => '　30枚　茶',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '頭付き　10枚黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '頭付き　10枚緑（第一）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '頭付き　12枚青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '頭付き　15枚オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '頭付き　20枚　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '頭付き　25枚　赤　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '千代田無頭　20枚黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => '千代田無頭　25枚赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 33,
                'name' => 'F　50枚　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => 'F　　30枚　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => 'F　　50枚　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => 'F　　50枚　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 34,
                'name' => 'マルイチ　2枚×15P紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 35,
                'name' => 'さばF　　40枚　白　　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 35,
                'name' => '真ホッケ　20枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 36,
                'name' => 'さば　2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 36,
                'name' => 'さば醤油　2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 36,
                'name' => '縞ホッケ　2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 36,
                'name' => '縞ホッケ醤油2枚×10袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '古い原料18枚黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '古い原料20枚青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '　　　　14枚紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 37,
                'name' => '　　　　25枚緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '12枚　ピンク  ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '15枚　白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '20枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 38,
                'name' => '25枚　黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '大８枚(紫）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '　８枚　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '１０枚（ﾋﾟﾝｸ）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '１０枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '１2枚　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '１2枚　黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '第一　12枚　ヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '20枚　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '20枚　黒　(京都）',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '25枚　青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'シマホッケF　16枚黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'シマホッケF　20枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => 'シマホッケF　40枚　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 39,
                'name' => '(東急）2枚×15P　黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 40,
                'name' => '2枚×15P黄・緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 40,
                'name' => '有頭2枚×15P茶',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 41,
                'name' => '山梨　F40枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 41,
                'name' => 'F（大）40枚ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 41,
                'name' => '京都　20枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 42,
                'name' => '第一　1枚×10袋　紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 43,
                'name' => 'シマホッケ有頭　50枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 44,
                'name' => '16枚　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 44,
                'name' => '18枚　オレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 44,
                'name' => '20枚　　ピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '韓国真あじ40枚　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '韓国あじ　山梨　50枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => 'オランダアジ　40枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => 'オランダアジ　40枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '東水長崎あじ2枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '                ﾔﾏｶ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 45,
                'name' => '韓国あじ3枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 46,
                'name' => '真ﾎｯｹ2枚×15袋青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 46,
                'name' => '赤魚2枚×15袋紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 46,
                'name' => '大水赤魚2枚×15袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 2,
                'middle_category_id' => 46,
                'name' => '                ｵﾚﾝｼﾞ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 47,
                'name' => 'ホンダフジ　長崎大20枚赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 47,
                'name' => '全日食　オンダアジ20枚白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 48,
                'name' => 'スーパー新　50枚黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 48,
                'name' => 'ショクブン　50枚緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 48,
                'name' => 'シャスコ　60枚　水色　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 49,
                'name' => '60枚　青 ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 49,
                'name' => '60枚　緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 50,
                'name' => '生協　オランダ3枚×40袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'マルエツ　2枚×20P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'マルエツ　3枚×20P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'オリンピック長崎あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'オリンピック長崎あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '3枚×15P　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '三和あじ2枚×15P白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '東急中骨あじ2枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'オレンジ　　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '千代田マックス韓国あじ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '2枚×20P　黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'ダイエ-長崎上アジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '2枚×20Ｐ白　　　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '食品館　あじ3枚×15P赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '千葉　真あじ4枚×16P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => 'ホンダオランダ4枚×15P緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 51,
                'name' => '(差し込み）長崎3枚×15P紫',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 52,
                'name' => 'ライフ2枚×15P 　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 53,
                'name' => '農塩　20枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 53,
                'name' => 'キミサワ無添加2×15袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 53,
                'name' => '新サバ醤油　50枚',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 54,
                'name' => 'マミーマート　金目1枚×15P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 54,
                'name' => '黄・緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 54,
                'name' => '食品館ﾎｯｹF2枚×15P緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 55,
                'name' => '金目１枚×８Ｐ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 55,
                'name' => '醤油サバ2枚×12P',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 55,
                'name' => '赤魚1枚×12P　　　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 56,
                'name' => '韓国ｱｼﾞ２枚×15Ｐｵﾚﾝｼﾞ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
[
                'big_category_id' => 3,
                'middle_category_id' => 56,
                'name' => '小アジ3枚×６P 青',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 56,
                'name' => 'さばF2枚×15Ｐ水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 56,
                'name' => '赤魚F　2枚×15P　黒赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 57,
                'name' => '新韓国あじ2枚×20Pピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 57,
                'name' => '真ホッケ1枚×21P白',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 58,
                'name' => '真ﾎｯｹ　２枚×15P　水色',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 59,
                'name' => '真ホッケ2枚×15P緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 60,
                'name' => 'あじ3枚×15P　緑黒',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 60,
                'name' => '金目1枚×15P　黄',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 60,
                'name' => '赤魚2枚×15P　赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 60,
                'name' => 'ノルサバ2枚×15P　黄緑',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 61,
                'name' => 'あじ3×15P　茶',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 61,
                'name' => 'キンメ　小　2×15P　',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 61,
                'name' => '千葉サバ2×15P　ヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 61,
                'name' => '真ホッケ2×15Pピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 62,
                'name' => 'あじ2枚×15Pピンク',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 62,
                'name' => 'ほっけ1枚×15P赤',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 62,
                'name' => 'さば2枚×15Pオレンジ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'あじ3枚×20袋ヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'さば2枚×20袋ヤマカ',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'さば醤油　　2枚×20袋',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'big_category_id' => 3,
                'middle_category_id' => 63,
                'name' => 'ヤマカ醤油',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ];

        DB::table('items')->insert($items2);
    }
}
