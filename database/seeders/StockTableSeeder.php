<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StockTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stocks')->truncate(); //2回目実行の際にシーダー情報をクリア
        DB::table('stocks')->insert([
            'name' => 'アスパラガス',
            'imgpath' => 'asupara.jpg',
        ]);
            DB::table('stocks')->insert([
            'name' => 'ブロッコリー',
            'imgpath' => 'burokori.jpg',
        ]);
            DB::table('stocks')->insert([
            'name' => '大根',
            'imgpath' => 'daikon.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => '枝豆',
            'imgpath' => 'edamame.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ゴボウ',
            'imgpath' => 'gobou.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ゴーヤ',
            'imgpath' => 'goya.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => '白菜',
            'imgpath' => 'hakusai.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ほうれん草',
            'imgpath' => 'houren.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'カボチャ',
            'imgpath' => 'kabocha.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'カブ',
            'imgpath' => 'kabu.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'かいわれ大根',
            'imgpath' => 'kaiware.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'キャベツ',
            'imgpath' => 'kyabetu.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'きゅうり',
            'imgpath' => 'kyuri.jpg',
        ]);DB::table('stocks')->insert([
            'name' => '水菜',
            'imgpath' => 'mizuna.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'なす',
            'imgpath' => 'nasu.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ねぎ',
            'imgpath' => 'negi.jpg',
        ]);DB::table('stocks')->insert([
            'name' => '人参',
            'imgpath' => 'ninjin.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'オクラ',
            'imgpath' => 'okura.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'パプリカ',
            'imgpath' => 'papurika.jpg',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パセリ',
            'imgpath' => 'paseri.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'ピーマン',
            'imgpath' => 'piman.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'レンコン',
            'imgpath' => 'renkon.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'レタス',
            'imgpath' => 'retasu.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => '里芋',
            'imgpath' => 'satoimo.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'サツマイモ',
            'imgpath' => 'satumaimo.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'セロリ',
            'imgpath' => 'serori.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'シソ',
            'imgpath' => 'siso.jpg',
        ]);DB::table('stocks')->insert([
            'name' => '生姜',
            'imgpath' => 'syoga.jpg',
        ]);DB::table('stocks')->insert([
            'name' => '玉ねぎ',
            'imgpath' => 'tamanegi.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'チンゲンサイ',
            'imgpath' => 'tingen.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'トマト',
            'imgpath' => 'tomato.jpg',
        ]);DB::table('stocks')->insert([
            'name' => '唐辛子',
            'imgpath' => 'tougarasi.jpg',
        ]);DB::table('stocks')->insert([
            'name' => 'とうもろこし',
            'imgpath' => 'toumorokosi.jpg',
        ]);
        DB::table('stocks')->insert([
            'name' => 'じゃがいも',
            'imgpath' => 'zyagaimo.jpg',
        ]);
        

    

    }
}