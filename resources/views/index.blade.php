@extends('layout.app')

@section('page-title', 'HOMEPAGE')

@section('content')
<div class="index-container w-100">
    <div class="w-75 m-auto d-flex flex-wrap ">
        <div class="current-serie">
            <p><strong>CURRENT SERIES</strong></p>
        </div>
        @foreach ($comics as $comic)
            <div class="singolo">
                <img src="{{ $comic['thumb'] }}" alt="">
                <h5>{{ $comic['series'] }}</h5>
            </div>

        @endforeach

    </div>
</div>

    

@endsection
