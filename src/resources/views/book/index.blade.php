@extends('layouts.base')

@section('title', 'index')

@section('contents')
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

    <h1>本を検索する</h1>

    <div class="search">
        ISBN<input id="isbn" type="text" name="isbn" value="9784798060996" autofocus>
        <button id="getBookInfo" class="">書籍情報取得</button>
    </div>

    <form action="{{ Route('create') }}" method="post">
        @csrf
        <div class="summary">
            <div class="thumbnail"></div>
            <div class="info">
                <p id="title">タイトル：</p>
                <p id="publisher">出版社：</p>
                <p id="author">著者：</p>
                <p id="pubdate">出版日：</p>
                <p id="description">説明：</p>
                <input type="submit" class="buttonRegist" value="感想を書く">
            </div>
        </div>
    </form>
@endsection
