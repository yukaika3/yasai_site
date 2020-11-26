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
            'url'=>'asupara'

        ]);
            DB::table('stocks')->insert([
            'name' => 'ブロッコリー',
            'imgpath' => 'burokori.jpg',
            'type' => '2',
            'url'=>'burokori'
        ]);
            DB::table('stocks')->insert([
            'name' => '大根',
            'imgpath' => 'daikon.jpg',
            'type' => '3',
            'url'=>'daikon'
        ]);
        DB::table('stocks')->insert([
            'name' => '枝豆',
            'imgpath' => 'edamame.jpg',
            'type' => '1',
            'url'=>'edamame',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ゴボウ',
            'imgpath' => 'gobou.jpg',
            'type' => '3',
            'url'=>'gobou',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ゴーヤ',
            'imgpath' => 'goya.jpg',
            'type' => '1',
            'url'=>'goya',
        ]);
        DB::table('stocks')->insert([
            'name' => '白菜',
            'imgpath' => 'hakusai.jpg',
            'type' => '2',
            'url'=>'hakusai',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ほうれん草',
            'imgpath' => 'houren.jpg',
            'type' => '2',
            'url'=>'hourensou',
        ]);
        DB::table('stocks')->insert([
            'name' => 'カボチャ',
            'imgpath' => 'kabocha.jpg',
            'type' => '1',
            'url'=>'kabocha',
        ]);
        DB::table('stocks')->insert([
            'name' => 'カブ',
            'imgpath' => 'kabu.jpg',
            'type' => '3',
            'url'=>'kabu',
        ]);
        DB::table('stocks')->insert([
            'name' => 'かいわれ大根',
            'imgpath' => 'kaiware.jpg',
            'type' => '2',
            'url'=>'kaiware',
        ]);
        DB::table('stocks')->insert([
            'name' => 'キャベツ',
            'imgpath' => 'kyabetu.jpg',
            'type' => '2',
            'url'=>'kyabetu',
        ]);
        DB::table('stocks')->insert([
            'name' => 'きゅうり',
            'imgpath' => 'kyuri.jpg',
            'type' => '1',
            'url'=>'kyuri',
        ]);
        DB::table('stocks')->insert([
            'name' => '水菜',
            'imgpath' => 'mizuna.jpg',
            'type' => '2',
            'url'=>'mizuna',
        ]);
        DB::table('stocks')->insert([
            'name' => 'なす',
            'imgpath' => 'nasu.jpg',
            'type' => '1',
            'url'=>'nasu',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ねぎ',
            'imgpath' => 'negi.jpg',
            'type' => '2',
            'url'=>'negi',
        ]);
        DB::table('stocks')->insert([
            'name' => '人参',
            'imgpath' => 'ninjin.jpg',
            'type' => '3',
            'url'=>'ninjin',
        ]);
        DB::table('stocks')->insert([
            'name' => 'オクラ',
            'imgpath' => 'okura.jpg',
            'type' => '1',
            'url'=>'okura',
        ]);
        DB::table('stocks')->insert([
            'name' => 'パプリカ',
            'imgpath' => 'papurika.jpg',
            'type' => '1',
            'url'=>'papurika',
        ]);

        DB::table('stocks')->insert([
            'name' => 'パセリ',
            'imgpath' => 'paseri.jpg',
            'type' => '2',
            'url'=>'paseri',
        ]);
        DB::table('stocks')->insert([
            'name' => 'ピーマン',
            'imgpath' => 'piman.jpg',
            'type' => '1',
            'url'=>'piman',
        ]);
        DB::table('stocks')->insert([
            'name' => 'レンコン',
            'imgpath' => 'renkon.jpg',
            'type' => '3',
            'url'=>'renkon',
        ]);
        DB::table('stocks')->insert([
            'name' => 'レタス',
            'imgpath' => 'retasu.jpg',
            'type' => '2',
            'url'=>'retasu',
        ]);
        DB::table('stocks')->insert([
            'name' => '里芋',
            'imgpath' => 'satoimo.jpg',
            'type' => '3',
            'url'=>'satoimo',
        ]);
        DB::table('stocks')->insert([
            'name' => 'サツマイモ',
            'imgpath' => 'satumaimo.jpg',
            'type' => '3',
            'url'=>'satumaimo',
        ]);
        DB::table('stocks')->insert([
            'name' => 'セロリ',
            'imgpath' => 'serori.jpg',
            'type' => '2',
            'url'=>'serori',
        ]);
        DB::table('stocks')->insert([
            'name' => '生姜',
            'imgpath' => 'syoga.jpg',
            'type' => '3',
            'url'=>'syoga',
        ]);
        DB::table('stocks')->insert([
            'name' => '玉ねぎ',
            'imgpath' => 'tamanegi.jpg',
            'type' => '2',
            'url'=>'tamanegi',
        ]);
        DB::table('stocks')->insert([
            'name' => 'チンゲンサイ',
            'imgpath' => 'tingen.jpg',
            'type' => '2',
            'url'=>'tingen',
        ]);
        DB::table('stocks')->insert([
            'name' => 'トマト',
            'imgpath' => 'tomato.jpg',
            'type' => '1',
            'url'=>'tomato',
        ]);
        DB::table('stocks')->insert([
            'name' => '唐辛子',
            'imgpath' => 'tougarashi.jpg',
            'type' => '1',
            'url'=>'togarashi',
        ]);
        DB::table('stocks')->insert([
            'name' => 'とうもろこし',
            'imgpath' => 'toumorokoshi.jpg',
            'type' => '1',
            'url'=>'tomorokosi',
        ]);
        DB::table('stocks')->insert([
            'name' => 'じゃがいも',
            'imgpath' => 'zyagaimo.jpg',
            'type' => '3',
            'url'=>'zyagaimo',
        ]);
        

    

    }
}