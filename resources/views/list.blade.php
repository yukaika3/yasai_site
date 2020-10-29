
@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<meta charset="UTF-8">
<html lang="ja">
<head>
<title>yasai_site</title>
<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
       <div class="mx-auto">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">野菜一覧</h1>
           <div class="d-flex">
           @foreach($stocks as $stock)
           <div class="yasai">
           <a href="sample2.html"><img src="assets/images/{{$stock->imgpath}}" alt="" ><br>
              {{$stock->name}} 
              {{$stock->detail}} 
            </div>
            @endforeach
                <div>
                    {{$stocks->links()}} 

                   
               </div>
   </div>
</div>
</body>
</html>
@endsection