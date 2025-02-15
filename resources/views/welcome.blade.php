@extends('layout.app', ['title' => 'Homepage'])

@section('content')

<div class="container text-center">
    <div class="row shadow my-5 p-3 bg-body-secondary rounded-2">
        <h2>What is this website?</h2>
        <p>This is the website where we learn bootstrap & blade</p>
    </div>
    <div class="row my-3 grid gap-0 column-gap-5">
        <div class="col shadow p-4 bg-info rounded">
            <h3 >Our Vision</h3>
            <p>Becoming a great backend programmer</p>
        </div>

        <div class="col shadow p-4 bg-info rounded">
            <h3 >Our Mission</h3>
            <p>Learning laravel until we are great in it</p>
        </div>
    </div>
  </div>

@endsection
