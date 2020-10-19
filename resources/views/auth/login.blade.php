<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}

    <title>@yield('title')</title>

    <!-- Scripts -->
        <!-- <link rel="stylesheet" type="text/css" href="{!! asset('css/bootstrap.min.css') !!}" >
        <link rel="stylesheet" href="{!! asset('css/bootstrap-theme.min.css') !!}">
        <script src="{!! asset('jQuery/jquery-1.9.1.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>

        
        <link rel="stylesheet" href="/css/app.css">


    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}} -->

    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->

    <!-- Bootstrap CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/5.4.55/css/materialdesignicons.min.css">
</head>
<body>
    <div id="app">
        <main class="row m-0 p-0">
            <div class="container-fluid p-0">
                <div class="row m-0">
                    <div class="col-md-6 m-0 p-0">
                        <div class="img-fluid" style="background-image: url('{{ asset('img/ads.png') }}'); height: 100vh; background-position: center;  background-size: cover;">
                            <!-- Mask & flexbox options-->
                            <div class="mask rgba-gradient align-items-center">
                                <div class="row m-0 py-4">
                                    <a href="/" class="btn ml-5">
                                         <h5 class="text-light"><span class="mdi mdi-home-roof"></span>This Present Truth</h5>
                                    </a>
                                </div>
                                <!-- Content -->
                                <div class="container">
                                  <!--Grid row-->
                                    <div class="row justify-content-center ">
                                    <!--Grid column-->
                                        <div class="white-text text-center text-md-center mt-xl-5 mb-5 wow fadeInLeft my-5" data-wow-delay="0.3s">
                                            <h1 class="h1-responsive font-weight-bold text-light text-center mt-sm-5 my-5">A platform where you can be blessed through written article of God's word</h1>
                                            <hr class="bg-light hr-light mb-2">
                                            <h6 class=" mb-4 text-light text-center">
                                                  A platform where you can be bleaaes through written article of God's word
                                            </h6>
                                            
                                        </div>
                                    </div>
                                  <!--Grid row-->
                                </div>
                                <!-- Content -->
                              </div>
                        </div>

                    </div>
                    <div class="col-md-6 col-sm-12 py-5 m-0">
                        <div class="container">

                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-10 mt-5">
                                <div class="card shadow-lg p-3 mt-2 mb-5 bg-white rounded">
                                                                           
                                    <div class="card-body">
                                        <h3 class="m-2 ">
                                            {{ __('Login') }}
                                        </h3>
                                        <hr>
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                    
                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                    
                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    
                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                    
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    
                                                        <label class="form-check-label" for="remember">
                                                            {{ __('Remember Me') }}
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                    
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        {{ __('Login') }}
                                                    </button>
                    
                                                    @if (Route::has('password.request'))
                                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>        
        </main>        
    </div>
    <!-- Bootsrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>