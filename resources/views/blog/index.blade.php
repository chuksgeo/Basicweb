@extends('layouts.app')

    @section('title', 'Blog')
    @section('content')    
        <div class="container-fluid ml-3">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            @if ($posts->isEmpty())
                <p> There is no post.</p>
            @else
                @foreach ($posts as $post)
                    <div class="card my-2 shadow p-3 mb-5 bg-white rounded">
                        <div class="card-header">
                            <h4 class="card-title"> {!! $post->title !!}</h4>
                        </div>
                        <div class="card-body">
                            <small class="text-muted">
                                <span class="mdi mdi-account-box-outline"></span><a href="" target="_blank" rel="noopener noreferrer"> {{ __('Tayo Fasan') }}</a>
                                <br>
                                <i class="mdi mdi-calendar-clock"></i> {!! $post->created_at !!} 
                            </small>                            
                                @foreach ($categories as $category)
                                    @if($post->categories->pluck('id')->contains($category->id))
                                    <span class="badge badge-primary text-dark mr-1" style="float:right;">
                                        <a class="text-white" href="{{route('blog.edit', $category)}}">
                                            {!! $category->name !!}
                                        </a>  </span>
                                    @else
                                    {{-- {{ __('CATEGORY')}}  --}}
                                    @endif                                
                                @endforeach                                                             
                            <hr>
                            <div class="d-flex">
                                <p class="card-text text-justify" style="text-indent: 2em">
                                    {{ mb_substr($post->content,0,500) }}
                                </p>
                            </div>
                            <a href="{{ route('blog.show', $post->id) }}" style="float:right;">
                                <span class="btn btn-info">Read More >></span>
                            </a>
                        </div>
                    </div>
                @endforeach
            @endif
            <br>
        </div>
        {{-- implementing pagination  --}}
        <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>    

    @endsection