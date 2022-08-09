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
                <input id="title" name="title" type="text" value="{{ old('title') }}" placeholder="キーワードを入力">
            </label>
            <label>
                <span>著者名</span>
                <input id="author" name="author" type="text" value="{{ old('author') }}"placeholder="キーワードを入力">
            </label>
            <label>
                <span>ISBNコード</span>
                <input id="isbn" name="isbn" type="text" value="{{ old('isbn') }}" placeholder="ISBNコードを入力">
            </label>
            <input id="search" type="submit" class="buttonRegist" value="検索">
        </div>
        @if (isset($books))
            @foreach ($books as $book)
                <div class="summary">
                    <div class="thumbnail">
                        @if (property_exists($book->volumeInfo, 'imageLinks'))
                            <img src="{{ $book->volumeInfo->imageLinks->thumbnail }}">
                        @endif
                    </div>
                    <div class="info">
                        <p>タイトル：{{ $book->volumeInfo->title }}</p>
                        @if (property_exists($book->volumeInfo, 'authors'))
                            <p>著者：{{ $book->volumeInfo->authors[0] }}</p>
                        @endif
                        @if (property_exists($book->volumeInfo, 'publishedDate'))
                            <p>出版日：{{ $book->volumeInfo->publishedDate }}</p>
                        @endif
                        @if (property_exists($book->volumeInfo, 'description'))
                            <p>{{ $book->volumeInfo->description }}</p>
                        @endif
                        <input type="submit" class="buttonRegist" value="感想を書く">
                    </div>
                </div>
                <hr>
            @endforeach
        @endif
    </form>
@endsection
