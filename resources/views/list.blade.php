<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>VegeVejiSearch</title>
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body>
  <header>
  <div id="home"></div>
    <a href=""><img src="img/logo.png"title="home" alt="logo"></a>

    <div class="menu">
          <ul>
            <li><a href="#home"  title="home"> <i class="fas fa-home"></i> Home</a></li>
            <li><a href="#vege"  title="vege"><i class="fas fa-laptop-code"></i> 野菜一覧</a></li>
            <li><a href="#cal" title="cal"><i class="fas fa-user"></i> カロリー計算</a></li>
            <li><a href="#mail"  title="mail"><i class="far fa-envelope"></i> お問い合わせ</a></li>
            <li><a href="#mail"  title="mail"><i class="far fa-envelope"></i> お問い合わせ</a></li>
          </ul>
     </div>
     

     <h1>野菜の種類</h1>

     <div class="boxs">
        <img src="/assets/images/asupara.jpg" alt="vege">
        <p>アスパラガス</p>
      </div>

      <div class="boxs">
        <img src="/assets/images/asupara.jpg" alt="vege">
        <p>a</p>
      </div>

      <div class="boxs">
        <img src="/assets/images/burokkori.jpg" alt="vege">
        <p>ブロッコリー</p>
      </div>

      <div class="boxs">
        <img src="/assets/images/daikon.jpg" alt="vege">
        <p>大根</p>
      </div>

     <div>
     @foreach($stocks as $stock)
        {{$stock->name}} <br>
         <img src="/image/{{$stock->imgpath}}" alt="" >
          <br>
          {{$stock->detail}} <br>
          @endforeach
         {{$stocks->links()}} 
     </div>
     
  </header>

  <p></p>
</body>
</html>