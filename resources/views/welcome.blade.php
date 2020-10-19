@extends('layouts.app')

    @section('title', 'Blog')
    @section('content')    
        <div class="container-fluid col-md-12 ml-5">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($posts->isEmpty())
                <p> There is no post.</p>
            @else
                @foreach ($posts as $post)
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"> {!! $post->title !!}</h4>
                        </div>
                        <div class="card-body" style="box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);transition: 0.3s;">
                            <small class="text-muted">Category: <a class="text-info" href=""></a> & Written by : <a class="text-info" href=""></a> On: {!! $post->created_at !!}</small>
                            <span class="badge badge-primary text-dark" style="float:right;">Comments</span>
                            <hr>
                            <div class="d-flex">
                                <p class="card-text">
                                    {{ mb_substr($post->content,0,2000) }}
                                </p>
                            </div>
                            <a href="{{ route('blog.show', $post->id ) }}" style="float:right;">
                                <span class="btn btn-info">Read More >></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
            <br>
        </div>      

    @endsection