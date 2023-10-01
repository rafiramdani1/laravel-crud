@extends('layouts.main')

@section('container')

<h4 class="mb-4">Categories</h4>
@foreach ($categories as $category)
  <ul>
    <li>
      <h2><a href="/posts?category={{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
  </ul>
</article>
@endforeach

@endsection