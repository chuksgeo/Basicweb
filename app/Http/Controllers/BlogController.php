<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Post;
use App\Category;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $posts = Post::paginate(5);
        return view('blog.index', compact('posts', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SearchRequest $request)
    {
        dd($result);
        $search = $request->get('search');
        $result = DB::table('Post')->where('name', 'like', '%'.search.'%')->get();
        dd($result);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // dd($post);

        $post = Post::where('id',$id)->firstOrFail();
        $comments = $post->comments()->get();
        $categories = $post->categories()->get();
        return view('blog.show', compact('post', 'comments', 'categories'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id',$id)->firstOrFail();
        $posts = $category->posts()->get();

         
        // dd($posts);
        return view('blog.edit', compact('posts', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
