@extends('admin.layouts.standard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <h1>{{$post->title}}</h1>
            <p><small>Slug: {{$post->slug}}</small></p>
            <p>{{$post->category->name}}</p>
            <p>{{$post->content}}</p>

            <a class="btn btn-info" href="{{ route('admin.posts.index') }}">Back to posts list</a>

        </div>
    </div>
</div>
@endsection