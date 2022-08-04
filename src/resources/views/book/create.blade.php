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
      <li class="nav__item"><a href="#">BOOK</a></li>
      <li class="nav__item"><a href="#">ABOUT</a></li>
    </ul>
  </nav>
</header>
<div class="contents">
  <h1>本を登録</h1>
  <form action="{{ route('book.store') }}" method="POST">
  @csrf
    <div>
      <div class="thumbnail"></div>
        <div class="summary">
          <p id="title"></p>
          <p id="publisher"></p>
          <p id="author"></p>
          <p id="pubdate"></p>
          <textarea name="" id="comment" cols="30" rows="10"></textarea>
    	  <a href="#">登録</a>
        </div>
    </div>
  </form>
</div>
</body>
</html>