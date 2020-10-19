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
        @include('inc.navbar')
        <div class="img-fluid" style="background-image: url('{{ asset('img/ads.png') }}'); height: 500px; background-position: center;  background-size: cover;">
            <!-- Mask & flexbox options-->
            <div class="mask rgba-gradient align-items-center">
                <!-- Content -->
                <div class="container">
                  <!--Grid row-->
                    <div class="row justify-content-center my-5 py-5">
                    <!--Grid column-->  
                        <div class="white-text text-center text-md-center mt-xl-5 mb-5 wow fadeInLeft" data-wow-delay="0.3s">
                            <h1 class="h1-responsive font-weight-bold text-light text-center mt-sm-5">THIS PRESENT TRUTH</h1>
                            <hr class="bg-light hr-light mb-2">
                            <h6 class=" mb-4 text-light text-center">
                                Confessions of a Captive of Christ
                            </h6>
                            <a class="btn btn-white">Download</a>
                            <a class="btn btn-outline-white">Learn more</a>
                        </div>
                    <!--Grid column-->
                    {{-- <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mt-xl-5 wow fadeInRight" data-wow-delay="0.3s">
                      <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/admin-new.png" alt="" class="img-fluid">
                    </div> --}}
                    <!--Grid column-->
                    </div>
                  <!--Grid row-->
                </div>
                <!-- Content -->
              </div>
        </div>
    
        

        <main class="py-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        @yield('content')
                    </div>
                    <div class="col-md-4">
                        {{-- @include('inc.sidebar') --}}
                        <x-sidebar/>
                    </div>
                </div>
            </div>        
        </main>
        {{-- footer section  --}}
        <footer  class="row text-light m-0">
            <div class="footer bg-dark">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="row p-5">
                                <div class="text-center">
                                    <h4>{{ __('About') }}</h4>
                                    <hr><br>
                                    {{-- <p class="text-center"> --}}
                                        Tayo Fasan is a student, servant & scribe of the word of righteousness @ Eternal Glorious Fountain Ministry, Lagos, where he continues to be trained to seek Christ solely For God.
                                        Via his writings, you will find timely and timeless truths around the gospel of Christ - for your edification
                                    {{-- </p> --}}
                                </div>      
                           
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row flex-column p-5">
                                <div class="text-center">
                                    <h4>{{ __('Newsletter') }}</h4>
                                    <hr>
                                    Stay updated with our latest post
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter your Email">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary btn-sm text-center text-white"type="button">Subscribe Now!</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="row flex-column p-5">
                                <div class="text-center">
                                    <h4>{{ __('Follow Us') }}</h4>
                                    <hr>
                                    Let's be social!
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h3>
                                    <span class="mdi  mdi-twitter text-primary"></span>
                                    <span class="mdi mdi-whatsapp pl-4 text-success"></span> 
                                    <span class="mdi mdi-facebook pl-4 text-primary"></span> 
                                    <span class="mdi mdi-instagram pl-4 text-warning"></span>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <p class="text-center">&copy 2020 | GEORGESON | All right Reserved</p>   
                </div>    
            </div>
        </footer>
        
    </div>
    <!-- Bootsrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script> 
</body>
</html>
