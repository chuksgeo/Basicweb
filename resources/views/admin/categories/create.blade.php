@extends('layouts.dashboard')
    @section('title', 'Create A New Category')
    @section('content')
        <div class="container-fluid px-5">
            <div class="card mt-5">
                <form class="form" method="post" action="{{ route('admin.categories.store') }}">
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
                @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <div class="card-header">
                        <legend>Create a new category</legend>
                    </div>
                        <div class="form-group">
                            <label for="name" class="col-lg-2 control-label">Name :</label>
                            <div class="cointainer px-5" >
                                <input type="text" class="form-control justify-content-center" id="name" name="name">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="container-fluid" style="float:right;">
                                <button type="submit" class="btn btn-primary" style="float:right;">Submit</button>
                                <button type="reset" class="btn btn-default"style="float:right;">Cancel</button>
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    @endsection