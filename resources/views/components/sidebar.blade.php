<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    @section('sidebar')
    <!-- side area section -->
    <div class="container-fluid my-2">
        <div class="card">
            <div class="card-body text-center">
                <form class="">
                    <div class="container-fluid">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search" style="background-color: #E5E5E5">
                        <button class="btn btn-danger mt-2" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <img src="{{ asset('img/profile.png') }}" alt="Profile" class="rounded mx-auto d-block img-fluid img-thumbnail mb-3">
                <div class="justify-content" style="text-indent: 1em">
                    Tayo Fasan is a student, servant & scribe of the word of righteousness @ Eternal Glorious Fountain Ministry, Lagos, where he continues to be trained to seek Christ solely For God.
                    <br>
                    <a href="/about" class="">view more...</a>
                </div> 
            </div>
        </div>
        <br>
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h2 class="lead">Sign Up!</h2>
            </div>
            <div class="card-body">
                <a href="{{ route('register') }}" class="btn btn-success btn-block text-center text-white mb-4">Join the Forum</a>
                <a href="{{ route('login') }}" class="btn btn-danger btn-block text-center text-white mb-4">Login</a>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Enter your Email">
                    <div class="input-group-append">
                        <button class="btn btn-primary btn-sm text-center text-white"type="button">Subscribe Now!</button>
                    </div>
                </div>
            </div>  
        </div>
        <br>
        <!-- Category section of side bar  -->
        <div class="card">
            <div class="card-header bg-primary text-light">
                <h2 class="lead">Categories</h2>
            </div>
           
            <div class="class-body">
                @foreach($categories  as $category)
                <div>
                    <ul>
                        <a href="{{route('blog.edit', $category)}}">
                            <li>{!! $category->name !!}</li>
                        </a>
                    </ul>
                </div>
                
                    @endforeach
        
            </div>
        </div>
        <br>
        <!-- Posts section of side bar / -->
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2 class="lead">Recent Posts</h2>
            </div>
            @foreach ($posts as $post)
                <ul>
                    <li>
                        <a href="{{ route('blog.show', $post->id ) }}">
                            {!! $post->title !!}
                        </a>
                    </li>
                </ul>  
            @endforeach
            <div class="class-body">
        
                 
                    
                </div>
            </div>
        </div>
    </div>

</div>