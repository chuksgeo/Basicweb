<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Category;
use App\Post;

class sidebar extends Component
{
    public function posts(){
        // $posts = Post::all();
        $posts = Post::select("*")->where("status", 1)->orderBy("id", "desc")->get();
        return $posts;

    
    }

    public function categories(){
        $categories = Category::all();
        return $categories;
        
        
    }
    
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        $posts = $this->posts();
        $categories = $this->categories();
    } 

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.sidebar');
    }
}
