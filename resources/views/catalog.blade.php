@extends('layout.app', ['title' => 'Catalog'])

@section('content')
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 my-2 g-3">
        @for ($i = 0; $i < 9;$i++)
        <div class="col">
            @include('include.catalogCard')
        </div>
        @endfor
    </div>

    </div>
@endsection
