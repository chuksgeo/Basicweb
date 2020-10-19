<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Http\Requests\SearchRequest;

class SearchController extends Controller
{
    public function newSearch(SearchRequest $request)
    {
    
        $search = $request->get('search');

        dd($search);
        

        // $result = Post::where('title','like','%'.$request->search.'%')->orWhere('content','LIKE','%'.$request->search.'%')->get();
        // if(count($result) > 0) return view('blog')->withDetails($result);
        // else return view('blog')->withMessage('No Details found. Try to search again !');


        

    }
}
