@extends('layout.main')
@section('content')
        <div class="col-sm-8 blog-main">
        @if($fld = session('message'))
        <div class="alert alert-success">
          {{  $fld }}
          </div>
        @endif
          <div class="blog-post">
          @foreach($posts as $post)
            <h2 class="blog-post-title">
            <a href="/group/{{ $post->id }}" >{{$post->title}}</a>
            </h2>
            <p class="blog-post-meta">
            @if(isset($post->user->name ))
            {{ $post->user->name }} on
            @endif
            {{ $post->created_at->toFormattedDateString() }}<a href="#"></a></p>

            <p>{{$post->body}}</p>
            @endforeach
          </div>
        </div>
@endsection
