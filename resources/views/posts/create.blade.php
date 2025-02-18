@extends('components.post')

@section('content')
    <div class="posts">
        <form action="{{route('posts.store')}}" method="POST">
            @csrf
            <h1 class="title">Create New Post</h1>
            <br>
            <h3>Please fill in everything</h3>
            <br>
            <div class="post">
                <label>Title</label><br>
                <input type="text" name="title" class="hoi" autofocus>
            </div>
            <div class="post">
                <label>Body</label>
                <input type="text" name="body" class="hoi" autofocus>
            </div>
            <div class="post">
                <label>Submit</label>
                <button type="submit" class="button">Save</button>
            </div>
        </form>
    </div>
@endsection
