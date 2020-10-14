
@extends('layouts.app')

@section('content')

<div class="container-fluid">
   <div class="">
       <div class="mx-auto" style="max-width:1200px">
           <h1 style="color:#555555; text-align:center; font-size:1.2em; padding:24px 0px; font-weight:bold;">商品一覧</h1>
           <div class="">
           @foreach($stocks as $stock)
               <div class="d-flex flex-row flex-wrap"><br>
                      <img src="assets/images/{{$stock->imgpath}}" alt="" class="incart" ><br>
                      {{$stock->name}} 
                      {{$stock->detail}} 
                
                   @endforeach
                <div>
                    {{$stocks->links()}} 

                   
               </div>
           </div>
       </div>
   </div>
</div>
@endsection