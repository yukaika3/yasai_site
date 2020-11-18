@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">
<head>
<link href="{{asset('/assets/css/yasai.css')}}" rel="stylesheet">
</head>

<div class="container">
<p></p>
     <div class="veg">
     <img src="assets/images/togarashi.jpg" alt="" align="top" >
     </div>
        <div class="Ex">
            <p>分類：果菜類</p>
            <p>カロリー:96cal(100g)</p>
            <p>主な栄養素:βカロテン、ビタミンC、ビタミンE、カプサイシン</p>
            <p></p>
            <p>豆知識：唐辛子はとてもカロリーが高いがいっぱんてきに風味を加える程度なので、唐辛子が大量に含まれている料理を食べなければカロリー過多になる可能性は低い</p>
            <p>旬：8~10月</p>
            <p></p>

        </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection