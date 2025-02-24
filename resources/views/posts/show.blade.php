@extends('components.post')

@section('content')
    <div class="postcontent">
      <h1 class="title">{{$post->title}}</h1>
      <p>{{$post->body}}</p>
        <a href="{{ route('posts.edit', $post) }}" class="button">Edit Post</a>
    </div>
@endsection
