<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class BigCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('big_categories')->insert([[
            'id' => 1,
            'name' => '製品1(市場)',
            'manager' => '石川',
            'first_sort' => 7,
            'second_sort' => 17,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'id' => 2,
            'name' => '製品2(加工屋)',
            'manager' => 'リリンコン',
            'first_sort' => 11,
            'second_sort' => 22,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'id' => 3,
            'name' => '製品3(スーパー)',
            'manager' => 'イン',
            'first_sort' => 9,
            'second_sort' => 23,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);
    }
}
