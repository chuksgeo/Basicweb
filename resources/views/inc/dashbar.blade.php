@section('dashbar')
    <div class="card bg-dark pt-5">
        {{-- Page Title --}}
        <h1 class="text-light text-center">
            My Dashboard
        </h1>
        {{-- User Details --}}
        <div class="card-body">
            <h5 class="card-title">
                <div class="d-flex justify-content-center text-light">
                    <svg width="7em" height="7em" viewBox="0 0 16 16" class="bi bi-person-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.468 12.37C12.758 11.226 11.195 10 8 10s-4.757 1.225-5.468 2.37A6.987 6.987 0 0 0 8 15a6.987 6.987 0 0 0 5.468-2.63z"/>
                        <path fill-rule="evenodd" d="M8 9a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 0 14A7 7 0 0 0 8 1zM0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8z"/>
                    </svg>
                </div>
            {{-- Sessions calling --}}
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="text-center text-light pt-3">
                    {{ Auth::user()->name }} {{ __('logged in!') }}
                </div>      
            </h5>
        </div>
        {{-- Component Listing  --}}
        <ul class="bg-dark list-group list-group-flush">
            <a href="/admin/users" class="">
                <li class="list-group-item bg-dark">
                    <h4 class="list-group-item-heading pl-5 my-1">
                        <span class="mdi mdi-account"></span>
                        Manage Users
                    </h4>
                </li>
            </a>
            <a href="/admin/categories" class="">
                <li class="list-group-item bg-dark">
                    <h4 class="list-group-item-heading pl-5 my-1">
                        <span class="mdi mdi-clipboard-text"></span>
                        Manage Categories
                    </h4>
                </li>
            </a>
            <a href="/admin/posts" class="">
                <li class="list-group-item bg-dark">
                    <h4 class="list-group-item-heading pl-5 my-1">
                        <span class="mdi mdi-comment"></span>
                        Manage Posts
                    </h4>
                </li>
            </a>
        </ul>
        <div class="row-action-primary ">
        {{-- Footer      --}}
            <p class="text-left text-light pl-3 mt-5">GEORGESON <br>
                &copy 2020<br>
                All right Reserved
            </p>
        </div>
    </div>