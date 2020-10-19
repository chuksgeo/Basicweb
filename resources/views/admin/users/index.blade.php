@extends('layouts.dashboard')
    
    @section('title', 'All users')
        @section('content')
        <div class="container-fluid p-5">
            <div class="card">
                <div class="card card-header">
                    <h2> All users </h2>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($users->isEmpty())
                    <p> There is no user.</p>
                @else
                <div class="card-body">
                    
                </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Rows</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{!! $user->id !!}</td>
                                <td><a href="#">{!! $user->name !!} </a></td>
                                <td>{!! $user->email !!}</td>
                                <td>{{ implode(',', $user->roles()->get()->pluck('name')->toArray()) }}</td>
                                <td>
                                    @can('edit-users')
                                        <a href="{{ route('admin.users.edit', $user->id) }}"><button type="button" class="btn btn-primary float-left mx-2">Edit</button></a>
                                    @endcan
                                    @can('delete-users')
                                        <form action="{{ route('admin.users.destroy', $user) }}"  method="POST" class="float-left">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-warning">Delete</button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        @endsection