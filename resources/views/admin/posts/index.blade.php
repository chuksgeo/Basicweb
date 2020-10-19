@extends('layouts.dashboard')
    
    @section('title', 'All posts')
    @section('content')
        <div class="container">
            <div class="card mx-1">
                <div class="card-header">
                    <span class="ml-auto m-0 mr-5" style="float: right">
                        <a href="/admin/posts/create" class="btn">
                            <h2><span class="mdi mdi-plus-circle-outline"></span></h2>
                        </a>
                    </span>
                    <h2> All posts </h2>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($posts->isEmpty())
                    <p> There is no post.</p>
                @else
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Slug</th>
                            <th>Created At</th>
                            <th>Updated At</th>
                        </tr>
                    </thead>
                </table>
                <div class="body" style="overflow-y: scroll; max-height: 215px;">
                    <table class="table">
                        <tbody>
                            @foreach($posts as $post)
                                <tr>
                                    <td>{!! $post->id !!}</td>
                                    <td><a href="{{ route('admin.posts.edit', $post->id) }}">{!! $post->title !!} </a></td>
                                    <td>{!! $post->slug !!}</td>
                                    <td>{!! $post->created_at !!}</td>
                                    <td>{!! $post->updated_at !!}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            {{-- implementing pagination  --}}
        {{-- <div class="d-flex justify-content-center">
            {!! $posts->links() !!}
        </div>  --}}
        </div>
    </div>
    @endsection