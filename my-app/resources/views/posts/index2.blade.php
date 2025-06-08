@extends('layout.app')
@section('title','投稿一覧')
@section('content')
<x-alert type='warning'>
  これは警告メッセージで
</x-alert>
  <h1 class='text-center'>index2のタイトルです</h1>
  @foreach ($posts as $post)
  <div>
    <h2 class='text-red-500 font-bold'>イトル名：{{$post->title}}</ h2>
    <p>本文：{{$post->body}}</p>
  </div>
  @endforeach
  @endsection
