@extends('layouts.base')

@section('title', 'create')

@section('contents')
    <h1>本の感想を投稿</h1>
    <form action="{{ route('book.review.store',['volume_id' => $book->getVolumeId()]) }}" method="POST">
        @csrf
        <div class="summary">
            <div class="thumbnail">
                <img src="{{ $book->getCoverImgUrl() }}">
            </div>
            <div class="info">
                <p>タイトル：{{ $book->getTitle() }}</p>
                <p>著者：{{ $book->getAuthors() }}</p>
                <p>出版日：{{ $book->getPublishedDate() }}</p>
                <p>{{ $book->getDescription() }}</p>
            </div>
        </div>
        <div class="regist">
            <span>感想を入力してください。</span>
            <textarea name="comment" cols="30" rows="10"></textarea>
            <input type="submit" value="保存">
        </div>
    </form>
@endsection
