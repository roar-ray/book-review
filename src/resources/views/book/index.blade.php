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

    <form action="{{ Route('search') }}" method="post">
        @csrf
        <div class="search">
            <h2>本を探す</h2>
            <label>
                <span>タイトル</span>
                <input id="title" name="title" type="text" placeholder="キーワードを入力">
            </label>
            <label>
                <span>著者名</span>
                <input id="author" name="author" type="text" placeholder="キーワードを入力">
            </label>
            <label>
                <span>ISBNコード</span>
                <input id="isbn" name="isbn" type="text" placeholder="ISBNコードを入力">
            </label>
            <input id="search" type="submit" class="buttonRegist" value="検索">
        </div>
        @if (isset($books))
            @foreach ($books as $book)
                <div class="summary">
                    @if (property_exists($book->volumeInfo, 'imageLinks'))
                        <div>
                            <img src="{{ $book->volumeInfo->imageLinks->thumbnail }}">
                        </div>
                    @else
                        <div></div>
                    @endif
                    <div class="info">
                        <p>タイトル：{{ $book->volumeInfo->title }}</p>
                        <p>出版社：</p>
                        <p>著者：</p>
                        <p>出版日：</p>
                        <p>説明：</p>
                        <input type="submit" class="buttonRegist" value="感想を書く">
                    </div>
                </div>
                <hr>
            @endforeach
        @endif
    </form>
@endsection
