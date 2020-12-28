@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">
<head>
<link href="{{asset('/assets/css/calorie.css')}}" rel="stylesheet">
</head>
<div class="container">


<p></p>
     <div class="veg">
     <img src="assets/images/vegetable.jpg" alt="" align="top" >
     <p>カロリー計算</p>
     </div>
        <div class="Ex">
        <p>あなたに必要な一日のカロリーを抽出します</p>
        <p>Q.性別</p>
        <img src="assets/images/sex.jpeg" alt="" align="top" ><br><br>
        <input type="radio" name="riyu" value="1"> 男性<br>
        <input type="radio" name="riyu" value="2"> 女性

        <p>Q.身長</p>
        <input type="text" class="heit"> cm</p>

        <p>Q.体重</p>
        <input type="text" class="weight"> kg</p>
        <a href=""><i class="bottom" ></i> 計算する</a>
        </div>

     

            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection