<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function index()
    {
        // get posts model
        $posts =  Post::latest()->paginate(5);
        // render view with posts
        return View('posts.index', compact('posts'));
    }
    public function create(): View
    {
        return view('posts.create');
    }
    public function store(Request $request): RedirectResponse
    {
        // validate form 
        $this->validate($request, [
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'

            
        ]);

        // uplod file image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());
        Post::create([
            'image' => $image->hashName(),
            'title' => $request->title,
            'content' => $request->content

        ]);

        return redirect()->route('posts.index')->with(['success' => 
        'Your post has been successfully created']);
    }

    public function show(string $id): View
    {
        // get post by ID
        $post=Post::findOrFail($id);

        // render view with post
        return view ('posts.show',compact('post') );
    }

    public function edit(string $id): View
    {
        $post = Post::findOrFail($id);

        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
        // validate form
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,jpg,png|max:2048',
            'title' => 'required|min:5',
            'content' => 'required|min:10'
        ]);
        // find post by id and save new data
        $post = Post::findOrFail($id);
        if($request->hasFile('image')){
            //upload new image
            $image=$request->file('image');
            $image->storeAs('public/posts/'. $image->hashName());
            //delete old image from storage

            Storage::delete('public/posts/' .$post->image);
            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }else{
            // update post without image
            $post->update([
            
                'title' => $request->title,
                'content' => $request->content
            ]);
        }

        // redirect to index
        return redirect()->route('posts.index')->with(['success' => 'Data Berhasil Diubah']);
    }

    public function destroy($id): RedirectResponse  
    {
        // get post by ID
        $post = Post::findOrFail($id);

        // delete image
        Storage::delete('public/posts'. $post->image);
        $post->delete();
        // redirect to index
        return redirect()->route('posts.index')->with(['success' => 'success delete data']);
        
    }
}
