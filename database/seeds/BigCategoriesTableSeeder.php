<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

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
            'name' => '製品1',
            'manager' => '石川さん',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'name' => '製品2',
            'manager' => 'リリンコン',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'name' => '製品3',
            'manager' => 'リリンコン',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'name' => '製品4',
            'manager' => 'キュウ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);
    }
}
