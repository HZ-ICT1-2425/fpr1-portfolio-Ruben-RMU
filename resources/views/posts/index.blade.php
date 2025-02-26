@extends('components.main')

@section('content')
    <img id="nonrev" src="/images/code.jpg">
    <img id="rev" src="/images/code.jpg">
    <div class="posts">
        <a href="{{ route('posts.create') }}"><button class="button">Create New Post</button></a>
        @foreach($posts as $post)
            <a class="post" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
        @endforeach
    </div>
@endsection
