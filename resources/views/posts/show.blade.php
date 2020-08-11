@extends('layout.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="card-body">
                       <div>
                       <h6 class="text-secondary"><a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a> &middot; {{$post->created_at->format('d F Y')}}
                       &middot;
                          @foreach ($post->tags as $tag)
                          <a href="#">{{$tag->name}}</a> |
                          @endforeach
                          </h6>
                        </div>
                        {{$post->body}}
                    </div>
                    <div class="card-footer">
                           <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            Hapus
                            </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Yakin mau menghapus : 
        {{$post->title}}
        <div>
        <small class="text-secondary">Published : {{$post->updated_at}}</small>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="/posts/{{$post->slug}}/delete" method="post">
            @csrf
            @method('delete')
            <button class="btn btn-danger" type="submit">Ya, Hapus</button>
         </form>
      </div>
    </div>
  </div>
</div>