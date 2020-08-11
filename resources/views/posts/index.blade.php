@extends('layout.app')
@section('content')
<div class="container">
    <div class="d-flex justify-content-between">
        <div>
            @isset($category)
                <h4>{{$category->name}}</h4>
            @else
                <h4>All posts</h4>
            @endisset
        </div>
        <div>
            <a href="/posts/create" class="btn btn-primary">Create post</a>
            <hr>
        </div>
    </div>
    
    <div class="row">
        @forelse ($posts as $post)
        <div class="col-md-4">
            <div class="card mb-3">
                <div class="card-header">
                   <b> {{$post->title}}</b>
                </div>
                <div class="card-body">
                    <div class="div">
                        {{Str::limit($post->body,100,'.')}}
                    </div>
                    <a href="/posts/{{$post->slug}}">Read more</a>    
                </div>
                <div class="card-footer d-flex justify-content-between">
                        Published on {{$post->created_at->diffForHumans()}}
                <a href="/posts/{{$post->slug}}/edit" class="btn btn-sm btn-success">Edit</a>
                </div>
            </div>
        </div>
        @empty 
        <div class="col-md-6">
            <div class="alert alert-info">
                There is no post
            </div>
        </div>
        @endforelse 
    </div>
<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
            
    </div>
</div>
@endsection