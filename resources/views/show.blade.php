@extends('layout.app')

@section('page-title', 'Comic')

@section('content')
<div class="show-top w-100"></div>
<div class=" show-middle w-100 bg-white">
    <div class="w-50 m-auto bg-black d-flex">
        <div class="col-8 bg-primary">
            <h3>{{ $comic['title'] }}</h3>
            <div class="tabella d-flex w-100 align-items-center">
                <div class="prezzo col-9 d-flex justify-content-between pe-3" >
                    <p>U.S. Price: <span class="text-white">{{$comic['price']}}</span></p>
                    <p>AVAILABLE</p>
                </div>
                <div class="col-3 ">
                    <p class="text-white ps-3">Check Availability</p>
                </div>
            </div>
            <div>
                <p>{{$comic['description']}}</p>
            </div>

        </div>
        <div class="col-4 bg-white">
            <p>ADVERTISEMENT</p>
            <img src="{{asset('img/adv.jpg')}}" alt="">

        </div>

    </div>
</div>
<div class="show-bottom">
    <div>
        <h1>Talent</h1>
        <hr>
        <p>art by:</p><p>{{$comic['artists']}}</p>
        <p>written by:</p><p> {{$comic['writers']}} </p>

    </div>
    <div>
        <h1>Specs</h1>
    </div>
</div>


@endsection


