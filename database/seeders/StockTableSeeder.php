<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
        // DB::table('stocks')->insert([
        //     'name' => 'アスパラガス',
        //     'imgpath' => 'asupara.jpg',
        // ]);

        DB::table('stocks')->insert([
            'name' => 'ブロッコリー',
            'imgpath' => 'burokori.jpg',
        ]);
    }
}