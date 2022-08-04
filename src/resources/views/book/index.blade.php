<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>
<header id="header">
  <h1 class="logo"><a href="#">Book Review</a></h1>
  <nav>
    <ul class="nav__list">
      <li class="nav__item"><a href="#">HOME</a></li>
      <li class="nav__item"><a href="{{Route('book.create')}}">BOOK</a></li>
      <li class="nav__item"><a href="#">ABOUT</a></li>
    </ul>
  </nav>
</header>
<div class="contents">
  <div class="notice">
    <p>お知らせ</p>
    <ul>
      <li>
        <a href="#">秋の読書フェア実施について</a>
      </li>
      <li>
        <a href="#">管理人おすすめ！この１冊がすごい！</a>
      </li>
    </ul>
  </div>

  <div class="search" >
        ISBN<input id="isbn" type="text" name="isbn" value="9784798060996" autofocus>
        <button id="getBookInfo" class="btn btn-default">書籍情報取得</button>
  </div>

  <div class="grid">
    @for ( $i=0 ; $i < 5; $i++)
    <div class="panel buttonRegist">
        <div class="thumbnail"></div>
        <div class="summary">
          <p id="title"></p>
          <p id="publisher"></p>
          <p id="author"></p>
          <p id="pubdate"></p>
    	    <a href="{{Route('book.create')}}">感想を書く</a>
        </div>
    </div>
    @endfor
  </div>

    <script>
        $(function() {
            $('#getBookInfo').click( function( e ) {
                e.preventDefault();
                const isbn = $("#isbn").val();
                const url = "https://api.openbd.jp/v1/get?isbn=" + isbn;

                $.getJSON( url, function( data ) {
                    if( data[0] != null ) {
                        if( data[0].summary.cover == "" ){
                            $(".thumbnail").html('<img src=\"\" />');
                        } else {
                            $(".thumbnail").html('<img src=\"' + data[0].summary.cover + '\" style=\"border:solid 1px #000000\" />');
                        }
                        $("#title").text(data[0].summary.title);
                        $("#publisher").text(data[0].summary.publisher);
                        $("#author").text(data[0].summary.author);
                        $("#pubdate").text(data[0].summary.pubdate);
                        $("#description").val(data[0].onix.CollateralDetail.TextContent[0].Text);
                    }
                });
            });
        });
    </script>
</div>
  </body>
</html>