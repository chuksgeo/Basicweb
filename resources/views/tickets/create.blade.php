@extends('contact')

    @section('title', 'Contact')
    
    @section('content')
        <div class="container-fluid mt-3">
            <div class="well well bs-component">
                
                <form class="form-horizontal" method="post">
                
                @foreach ($errors->all() as $error)
                    <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class="alert alert-success">   {{ session('status') }}   </div>
                @endif

                @csrf
                
                    <fieldset>
                    <legend><h3 class="text-center">Submit a new ticket</h3></legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-3 control-label">Title :</label>
                        <div class="">
                            <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-3 control-label">Content :</label>
                        <div class="">
                            <textarea class="form-control" rows="3" placeholder="Feel free to ask us any question" id="content" name="content"></textarea>
                            {{-- <span class="help-block">Feel free to ask us any question.</span> --}}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {{-- <button class="btn btn-default">Cancel</button> --}}
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </div>
                    </fieldset>
                </form>
            </div>
        </div>
    @endsection
