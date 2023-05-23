@extends('layouts.app')

@section('content')
<section class="jumbotron">
    <div class="container">
        <a class="series-btn" href="">
            CURRENT SERIES
        </a>
    </div>
</section>
<section class="comics">
    <div class="container">
        <div class="row row-cols-6 g-5">
            @foreach ($db as $comic)
            <div class="col">
                <div class="card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <div class="pt-3">
                        <h6 class="card-title">{{ $comic['series'] }}</h6>
                    </div>
                </div>
            </div>
                
            @endforeach
        </div>
    </div>
</section>
    
@endsection