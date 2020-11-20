@extends('layouts.default')

@section('title', 'MyTop10')

@section('content')

    <h1>
    <a href="{{ url('/posts/create') }}" class="float-right btn btn-outline-primary">新規作成</a>
    MyTop10
    </h1>
      <table class="table table-striped table-hover mt-3">
        @forelse ($posts as $post)
          <tr>
            <td>
                <a href="{{ action('PostsController@show', $post) }}">{{ $post->title }}</a>
            </td>
            <td>
                <a href="{{ action('PostsController@edit', $post) }}" class="btn btn-outline-secondary">編集</a>
            </td>
            @empty
            <p class="mt-4">投稿がありません</p>
          </tr>
        @endforelse
      </table>

@endsection