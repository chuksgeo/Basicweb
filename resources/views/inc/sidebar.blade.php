@section('sidebar')
    <!-- side area section -->
    <div class="container-fluid my-2">
        <div class="card">
            <div class="card-body text-center">
                <form class="" action="/blog/store" method="get">
                    <div class="container-fluid">
                        @csrf
                        <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
                        <button class="btn btn-secondary mt-2" type="submit" name="searchButton">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-body">
                <img src="images/ads1.jpg" alt="Ads" class="d-block img-fluid mb-3">
                <div class="text-center">
                    this is a test of a content management site
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
                        <li>{!! $category->name !!}</li> 
                    </ul>
                </div>
                
                    @endforeach
        
            </div>
        </div>
        <br>
        <!-- Posts section of side bar / -->
        <div class="card">
            <div class="card-header bg-info text-white">
                <h2 class="lead" style="font-family: Montserrat">Recent Posts</h2>
            </div>
            @foreach ($posts as $post)
                <ul>
                    <li>
                        {!! $post->title !!}
                    </li>
                </ul>  
            @endforeach
            <div class="class-body">
        
                 
                    
                </div>
            </div>
        </div>
    </div>

