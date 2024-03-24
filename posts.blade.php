
@extends('layouts.main')

@section('container')
   
    @foreach ($posts as $)
        <article class="mb-5">
            <h2>  
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"]}}</a>
</h2>
<h5>By: {{ $post["author"] }} <?h5>
<p>{{ $post["body"]}} </p>
</article>
<a href="/blog">Back to Posts</a>
    @endforeach
@endsection

