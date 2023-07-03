@extends('layout.base')

@section('content')
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
                <div class="col py-3 h-100"> 
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>
@endsection
