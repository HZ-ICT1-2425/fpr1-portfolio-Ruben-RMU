@extends('components.post')

@section('content')
    <div class="posts">
        <h1 class="title">ARE YOU SURE YOU WANT TO DELETE THIS POST?</h1>
        <form action="{{ route('posts.destroy', $post) }}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="button" value="YES">
        </form>
        <a href="{{ route('posts.show', $post) }}" class="button">NO</a>
    </div>
@endsection
