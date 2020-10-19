@extends('layouts.app')

    @section('title', 'View a post')
        @section('content')
            <div class="container-fluid ml-3">
                <div class="card bg-light my-2 shadow p-3 mb-5 rounded">
                    <div class="card-header">
                        <h2 class="card-title">{!! $post->title !!}</h2>
                    </div>
                    <div class="card-body">
                        <small class="text-muted">
                            <span class="mdi mdi-account-box-outline"></span> by : <a class="text-info" href="">{{ __('Pst Tayo Fasan') }}</a><br>
                            <i class="mdi mdi-calendar-clock"></i> at : {!! $post->created_at !!} 
                        </small>
                        @foreach ($categories as $category)
                            @if($post->categories->pluck('id')->contains($category->id))
                                <span class="badge badge-primary text-dark mr-1" style="float:right;">
                                    <a class="text-white" href="{{route('blog.edit', $category)}}">
                                        {!! $category->name !!}
                                    </a>
                                </span>
                            @else
                            {{ __('CATEGORY')}} 
                            @endif                                
                        @endforeach 
                        <hr>
                        <p class="card-text text-justify" style="text-indent: 2em"> {!! $post->content !!} </p>
                    </div>
                    {{-- Blog footer  --}}
                    <div class="" style="float:left;">
                        <p class="mb-0">
                            {{ __('Blessings!')}}
                        </p>
                        <p class="font-weight-bold mb-0">
                            {{ __('Tayo Fasan')}}
                        </p>
                        <p class="mb-0">
                            {{ __('08172125670')}}
                        </p>
                    </div> 
                    {{-- social media links                        --}}
                    <hr class="bg-dark">
                    <div class="px-1" style="float:right;">
                        <p class="text-muted text-center">SHARE WITH: </p>
                        <div class="d-flex justify-content-center">
                            <h3><a href="https://twitter.com/intent/tweet" target="_blank" rel="noopener noreferrer"><span class="mdi  mdi-twitter text-primary"></span></a>
                                <span class="mdi mdi-whatsapp pl-4 text-success"></span> 
                                <span class="mdi mdi-facebook pl-4 text-primary"></span> 
                                <span class="mdi mdi-instagram pl-4 text-warning"></span>
                            </h3>
                        </div>
                    </div>    
                </div>
                <div class="clearfix"></div>
                <br>
                {{-- Show Comment section --}}    
                @if ($comments->isEmpty())
                    {{-- {{ __(' Share your thought now ')}} --}}
                @else
                    <div class="alert alert-header">
                        <h5 class="bold">
                            Comments
                        </h5>
                        @foreach($comments as $comment)
                            <div class="alert" style="width:100%;">
                                <div class="comment">
                                    <span class="badge badge-primary text-dark" style="float:right;"><a class="text-white" href=""><i class="mdi mdi-message-reply"></i>reply</a></span>                        
                                    <div class="media CommentBlock">
                                        <div class="d-block img-fluid align-self-start"  width="50px">
                                            <h1>
                                                <span class="mdi mdi-account-box-outline"></span>
                                            </h1>
                                        </div>
                                        <div class="media-body ml-2">                                       
                                            <h7 class="lead">{{ __(' anonymous')}}</h7>
                                            <p class="small">{!! $comment->created_at !!}</p>
                                            <p>{!! $comment->content !!}</p>
                                        </div>
                                    </div>
                                </div>
                            </div><hr>
                        @endforeach
                    </div>
                @endif
                {{-- Comment input section  --}}
                <div class="card my-2 shadow-sm p-3 mb-5 bg-white rounded" style="border-radius: .5rem!important;">
                    <form class="form-horizontal" method="post" action="/comment">
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        @csrf
                        <input type="hidden" name="post_id" value="{!! $post->id !!}">
                        <input type="hidden" name="post_type" value="App\Post">
                        <fieldset >
                            <div class="card-header mb-5">
                                <legend class="class-title">Share your Thoughts</legend>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                    <textarea class="form-control shadow-sm" rows="3" id="content" name="content"></textarea>
                                </div>
                            </div>
                            <div class="form-group overflow-auto">
                                <div class="float-right px-3">
                                    <button type="reset" class="btn btn-default">Cancel</button>
                                    <button type="submit" class="btn btn-primary">Post</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        @endsection                        
            
        