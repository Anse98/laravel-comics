@extends('layout.layout')

@section('content')

<section class="hero"> 
    
</section>

<section class="comic-books py-5">
    <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-2"> 
                <div class="comic-card">
                    <img src="{{ $comic['thumb'] }}" alt="">
                    <p class="title">{{$comic['title']}}</p>
                </div>
            </div>
            @endforeach 
        </div>
    </div>
</section>

<section class="informations">
    <div class="container">
        <ul class="d-flex justify-content-between py-5">
            <li>DIGITAL COMICS</li>
            <li>DC MERCHANDISE</li>
            <li>SUBSCRIPTION</li>
            <li>COMIC SHOP LOCATOR</li>
            <li>DC POWER VISA</li>
        </ul>
    </div>
</section>

@endsection

