<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SearchRequest;
use App\Post;
use App\Category;

class PageController extends Controller
{
    public function home(){
        return redirect('blog');
    }

    public function about(){
        return view('about');
    }

    public function dashboard(){
        return view('dashboard');
    }

    /*public function contact(){
        return view('contact');
    }
    public function contact(){
    return view('tickets.create');
    }*/

    
}
