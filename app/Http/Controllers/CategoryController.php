<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{

    public function getCat()
    {
        $categories = Category::all();
        return view('category.categories', compact('categories'));
    }

    public function getIndex(Request $request)
    {

        if ($request->category) {
            $posts = Category::where('name', $request->category)
            ->firstOrFail()
            ->posts()
            ->orderBy("id", "desc")
            ->paginate(6)
            ->withQueryString();
        } else {
            $posts = Post::orderBy("id", "desc")->paginate(6);
        }

        /*  $posts = Category::find($request->category)->posts;*/

        return view('category.index', compact('posts'));
    }
    public function getShow(Request $request, $id)
    {

        //compact('id') --> ['id' => $id]
        $post = Post::find($id);

        return view('category.show', compact('post'));
    }

    public function getCreate()
    {
        $categories = Category::all();
        return view('category.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->user_id = Auth::user()->id;
        $post->category_id = $request->category_id;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('category.getCat');
    }

    public function getEdit($id)
    {
        $categories = Category::all();

        $post = Post::find($id);
        return view('category.edit', compact("post", "categories"));
    }

    public function update(Request $request, $id)
    {

        $post = Post::find($id);

        $post->title = $request->title;
        $post->category_id = $request->category_id;
        $post->content = $request->content;

        $post->save();

        return redirect()->route('show.getShow', $post->id);
    }

    public function checkUpdate(Request $request, $id){
         $post = Post::findOrFail($id);

        $post->habilitated = $request->has('habilitated') ? 1 : 0;

        $post->save();

        return redirect()->route('category.getCat');
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('category.getCat');
    }
}
