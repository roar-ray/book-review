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
                <input name="title" type="text" value="{{ old('title') }}" placeholder="キーワードを入力">
            </label>
            <label>
                <span>著者名</span>
                <input name="author" type="text" value="{{ old('author') }}"placeholder="キーワードを入力">
            </label>
            <label>
                <span>ISBNコード</span>
                <input name="isbn" type="text" value="{{ old('isbn') }}" placeholder="ISBNコードを入力">
            </label>
            <input type="submit" name="search" class="btn" value="検索">
        </div>
        @if (isset($books))
            @foreach ($books as $book)
                <div class="summary">
                    <div class="thumbnail">
                        <img src="{{ $book->getCoverImgUrl() }}">
                    </div>
                    <div class="info">
                        <p>タイトル：{{ $book->getTitle() }}</p>
                        <p>著者：{{ $book->getAuthors() }}</p>
                        <p>出版日：{{ $book->getPublishedDate() }}</p>
                        <p>{{ $book->getDescription() }}</p>
                        <a href="{{route('book.review.create',['volume_id'=>$book->getVolumeId()])}}">感想を書く</a>
                    </div>
                </div>
                <hr>
            @endforeach
        @endif
    </form>
@endsection
