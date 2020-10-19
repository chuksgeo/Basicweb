@extends('layouts.app')

@section('title', 'about_us')

<div class="container">
@section('content')
   
        <div class="content">
            <div class="title"><h1>ABOUT US</h1></div>
            <div class="quote">Welcome to About Us Page!</div>
        </div>
    
@endsection
</div>

@section('sidebar')
@parent
<h4>this is appended to the sidebar</h4>
@endsection



