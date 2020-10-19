@extends('layouts.dashboard')
    @section('title', 'All categories')
        @section('content')
            <div class="container-fluid col-md-8">
                <div class="card">
                    <div class="card-header">
                        <span class="ml-auto m-0 mr-5" style="float: right">
                            <a href="/admin/categories/create" class="btn">
                                <h2><span class="mdi mdi-plus-circle-outline"></span></h2>
                            </a>
                        </span>
                        <h2> All categories </h2>
                    </div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if ($categories->isEmpty())
                        <p> There is no category.</p>
                        @else
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categories as $category)
                                    <tr><td>{!! $category->id !!}</td>
                                        <td>{!! $category->name !!}</td>
                                        <td><a href="{{ route('admin.categories.edit', $category->id) }}"><button type="button" class="btn btn-primary float-left mx-2">Edit</button></a>
                                            <form action="{{ route('admin.categories.destroy', $category->id) }}"  method="POST" class="float-left">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit" class="btn btn-warning">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @endif
                    </div>    
                </div>
            </div>
        @endsection