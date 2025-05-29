<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    
    public function getIndex()
    {
        $posts = Post::orderBy("id", "desc")->paginate(10);
        return view('category.index', compact('posts'));
    }
    public function getShow($id)
    {

        //compact('id') --> ['id' => $id]
        $post = Post::find($id);

        return view('category.show', compact('post'));
    }

    public function getCreate()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect("/category/show");
    }

    public function getEdit($id)
    {

        $post = Post::find($id);
        return view('category.edit', compact("post"));
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        $post->title = $request->title;
        $post->poster = $request->poster;
        $post->category = $request->category;
        $post->content = $request->content;

        $post->save();

        return redirect("/category/show/{$post->id}");
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect("/category/show");
    }
}
