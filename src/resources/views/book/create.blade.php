@extends('layouts.base')

@section('title', 'create')

@section('contents')
    <h1>本を登録</h1>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="summary">
            <div class="thumbnail"></div>
            <div class="info">
                <p id="title">タイトル：</p>
                <p id="publisher">出版社：</p>
                <p id="author">著者：</p>
                <p id="pubdate">出版日：</p>
                <p id="description">説明：</p>
            </div>
        </div>
        <div class="regist">
            <span>感想を入力してください。</span>
            <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
            <a class="buttonRegist" href="{{ Route('store') }}">保存</a>
        </div>
    </form>
@endsection
