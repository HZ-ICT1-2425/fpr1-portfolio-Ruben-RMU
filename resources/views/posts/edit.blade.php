@extends('components.post')

@section('content')
    <div class="posts">
        <form action="{{ route('posts.update', $post) }}" method="POST">
            @method('PUT')
            @csrf
            <h1 class="title">Edit Post</h1>
            <br>
            <h3>Please fill in everything</h3>
            <br>
            <div class="post">
                <label>Title</label><br>
                <input type="text" name="title" class="hoi" value="{{ $post->title }}" autofocus>
            </div>
            <div class="post">
                <label>Body</label>
                <input type="text" name="body" class="hoi" value="{{ $post->body }}" autofocus>
            </div>
            <div class="post">
                <label>Submit</label>
                <button type="submit" class="button">Edit</button>
            </div>
        </form>
    </div>
@endsection
