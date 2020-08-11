<?php

namespace App\Http\Controllers;

use App\Post;
use App\Http\Requests\PostRequest;

class PostController extends Controller
{
   public function index()
   {
       $posts = Post::latest()->paginate(6);
       return view('posts.index',['posts'=>$posts]);
   }
   function show(Post $post)
   {
       return view('posts.show',compact('post'));
   }
   public function create()
   {
       $data =[
            'post'=>new Post,
            'submit'=>'Create'
       ];
       return view('posts.create',$data);
   }
   public function store(PostRequest $request)
   {
        // $post = New Post;
        // $post->title = $request->title;
        // $post->slug = \Str::slug($request->title);
        // $post->body = $request->body;
        // $post->save();
        // return redirect()->to('post');
        // return back();

        // $attr =$this->requestValidasi();
      
       $attr = $request->all();

        $attr['slug'] = \Str::slug(request('title'));

        Post::create($attr);

        session()->flash('sukses','Input berhasil');
        return redirect('posts');
   }

   function edit(Post $post)
   {
       return view('posts.edit',compact('post'));
   }
   function update(PostRequest $request, Post $post)
   {
       $attr = $request->all();

       $post->update($attr);
       session()->flash('sukses', 'selamat belajar');
       return redirect('posts');
   }
  public function destroy(Post $post)
  {
     $post->delete();
     session()->flash('hapus');
     return redirect('posts');
  }
}
