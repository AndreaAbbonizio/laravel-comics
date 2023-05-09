@extends('layouts/layout')

@section('content')

<div class="container-jumbotron">
    <img src='{{Vite::asset('resources/images/jumbotron.jpg')}}' alt="Jumbotron">
</div>
<main>
    <div class="background-series">
        <span id="current-series">CURRENT SERIES</span>
        <div class="container-series">
            @foreach($comics as $singleComic)
            <div class="card-series">
                <img src="{{$singleComic['thumb']}}" alt="">
                <p id="title">{{$singleComic['series']}}</p>
            </div> 
            @endforeach
        </div>
    
        <div class="load-more">
            <span>LOAD MORE</span>
        </div>
    
    </div>
    <div id="container-main">
        <div id="main-links">
            <ul>
                @foreach( $mainLinks as $mainLink)
                <li>
                    <img src='{{Vite::asset($mainLink['image'])}}' alt="">
                    <span>{{$mainLink['title']}}</span>
                </li>
                @endforeach
            </ul>
        </div>
    </div>

</main>

@endsection