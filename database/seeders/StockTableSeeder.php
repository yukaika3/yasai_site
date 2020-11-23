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
            'type' => '2',
            'url'=>'asupara',

        ]);
            DB::table('stocks')->insert([
            'name' => 'ブロッコリー',
            'imgpath' => 'burokori.jpg',
            'type' => '2',
        ]);
            DB::table('stocks')->insert([
            'name' => '大根',
            'imgpath' => 'daikon.jpg',
            'type' => '3',
        ]);
        DB::table('stocks')->insert([
            'name' => '枝豆',
            'imgpath' => 'edamame.jpg',
            'type' => '1',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ゴボウ',
            'imgpath' => 'gobou.jpg',
            'type' => '3',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ゴーヤ',
            'imgpath' => 'goya.jpg',
            'type' => '1',
        ]);
        DB::table('stocks')->insert([
            'name' => '白菜',
            'imgpath' => 'hakusai.jpg',
            'type' => '2',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ほうれん草',
            'imgpath' => 'houren.jpg',
            'type' => '2',
        ]);
        DB::table('stocks')->insert([
            'name' => 'カボチャ',
            'imgpath' => 'kabocha.jpg',
            'type' => '1',
        ]);
        DB::table('stocks')->insert([
            'name' => 'カブ',
            'imgpath' => 'kabu.jpg',
            'type' => '3',
        ]);
        DB::table('stocks')->insert([
            'name' => 'かいわれ大根',
            'imgpath' => 'kaiware.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => 'キャベツ',
            'imgpath' => 'kyabetu.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => 'きゅうり',
            'imgpath' => 'kyuri.jpg',
            'type' => '1',
        ]);DB::table('stocks')->insert([
            'name' => '水菜',
            'imgpath' => 'mizuna.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => 'なす',
            'imgpath' => 'nasu.jpg',
            'type' => '1',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ねぎ',
            'imgpath' => 'negi.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => '人参',
            'imgpath' => 'ninjin.jpg',
            'type' => '3',
        ]);DB::table('stocks')->insert([
            'name' => 'オクラ',
            'imgpath' => 'okura.jpg',
            'type' => '1',
        ]);DB::table('stocks')->insert([
            'name' => 'パプリカ',
            'imgpath' => 'papurika.jpg',
            'type' => '1',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パセリ',
            'imgpath' => 'paseri.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => 'ピーマン',
            'imgpath' => 'piman.jpg',
            'type' => '1',
        ]);DB::table('stocks')->insert([
            'name' => 'レンコン',
            'imgpath' => 'renkon.jpg',
            'type' => '3',
        ]);DB::table('stocks')->insert([
            'name' => 'レタス',
            'imgpath' => 'retasu.jpg',
            'type' => '2',
        ]);
        DB::table('stocks')->insert([
            'name' => '里芋',
            'imgpath' => 'satoimo.jpg',
            'type' => '3',
        ]);DB::table('stocks')->insert([
            'name' => 'サツマイモ',
            'imgpath' => 'satumaimo.jpg',
            'type' => '3',
        ]);DB::table('stocks')->insert([
            'name' => 'セロリ',
            'imgpath' => 'serori.jpg',
            'type' => '2',
        ]);
        DB::table('stocks')->insert([
            'name' => 'シソ',
            'imgpath' => 'siso.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => '生姜',
            'imgpath' => 'syoga.jpg',
            'type' => '3',
        ]);DB::table('stocks')->insert([
            'name' => '玉ねぎ',
            'imgpath' => 'tamanegi.jpg',
            'type' => '2',
        ]);DB::table('stocks')->insert([
            'name' => 'チンゲンサイ',
            'imgpath' => 'tingen.jpg',
            'type' => '2',
        ]);
        DB::table('stocks')->insert([
            'name' => 'トマト',
            'imgpath' => 'tomato.jpg',
            'type' => '1',
        ]);DB::table('stocks')->insert([
            'name' => '唐辛子',
            'imgpath' => 'tougarasi.jpg',
            'type' => '1',
        ]);DB::table('stocks')->insert([
            'name' => 'とうもろこし',
            'imgpath' => 'toumorokosi.jpg',
            'type' => '1',
        ]);
        DB::table('stocks')->insert([
            'name' => 'じゃがいも',
            'imgpath' => 'zyagaimo.jpg',
            'type' => '3',
        ]);
        

    

    }
}