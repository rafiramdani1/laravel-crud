@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-8">

                <h2>{{ $post->title }}</h2>

                <a href="/dashboard/posts" class="btn btn-success mt-3">Back to my posts</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning mt-3">Edit</a>

                <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger mt-3" onclick="return confirm('Are you sure?')">Delete</button>
                </form>

                @if ($post->image)
                    <div style="max-height: 350px; overflow: hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top img-fluid">
                    </div>
                @else
                    <img src="http://source.unsplash.com/1200x400?{{ $post->category->name }}"
                        class="card-img-top img-fluid" alt="...">
                @endif

                <article class="my-3">
                    {!! $post->body !!}
                </article>

            </div>
        </div>
    </div>
@endsection
