<?php
/**
 * @var \App\Models\Post $post
 */
$title = '投稿詳細';
?>
@extends('front.layouts.base')

@section('content')
    <div class="card-header">{{ $title }}</div>
    <div class="card-body">
        <h2>{{ $post->title }}</h2>
        <time>{{ $post->published_at->format('Y年m月d日') }}</time>
        <div>{!! nl2br(e($post->body)) !!}</div>
        <div class="btn btn-secondary"><a href="{{ route('post.index') }}">'一覧へ戻る'</a></div>
    </div>
@endsection
