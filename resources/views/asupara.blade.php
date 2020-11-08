@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">
<head>
<link href="{{asset('/assets/css/yasai.css')}}" rel="stylesheet">
</head>

<div class="container">
<p>アスパラガス</p>
     <div class="veg">
     <img src="assets/images/asupara.jpg" alt="asupara" align="top" >
     </div>
        <div class="Ex">
            <p>分類：葉茎類</p>
            <p>カロリー:22cal</p>
            <p>主な栄養素:オリゴ糖 カロテン ビタミンB1 ビタミンB2 ビタミンC ビタミンE カルシウム カリウム 食物繊維 
                葉酸 アスパラギン ルチン</p>
            <p>アスパラギン：アスパラガスから発見された栄養素</p>
            <p>豆知識：ホワイトアスパラよりグリーンアスパラの方が栄養価が高い</p>
            <p>旬：５〜６月</p>
            <p></p>

        </div>

            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection