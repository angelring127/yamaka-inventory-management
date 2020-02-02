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
            'name' => '製品1',
            'manager' => '石川さん',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'id' => 2,
            'name' => '製品2',
            'manager' => 'リリンコン',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'id' => 3,
            'name' => '製品3',
            'manager' => 'リリンコン',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ],[
            'id' => 4,
            'name' => '製品4',
            'manager' => 'キュウ',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]]);
    }
}
