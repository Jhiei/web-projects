<link rel="stylesheet" href=" {{ asset('sass/pages/index/index.css') }} ">

@extends('template')

@section('content')
    <div class="hero">
        <div class="hero-img">
            <img src="{{ asset('images/index/coffee_hero2.jpg') }}" alt="Hero Image">
        </div>
        <div class="hero-text">
            <h1>Got love for <span>coffee?</span> Pass and pay.</h1>
            <p>We'll brew your drink, just the way you like it.</p>
        </div>
    </div>
    <div class="row-1">
        <div class="row-1-img">
            <img src="{{ asset('images/index/speech_mark.png') }}" alt="Speech Mark">
        </div>
        <div class="row-1-text">
            <blockquote>
                "Coffee tastes better when you're <span>not</span> in a rush."
            </blockquote>
            <p>~ Novi, Nursing Student of KCL</p>
        </div>
    </div>
    <div class="row-2">
        <div class="row-2-list">
            <div class="row-2-item">
                <div class="row-2-item-img">
                    <img src=" {{ asset('images/index/clock_icon.png') }} " alt="Clock Icon">
                </div>
                <div class="row-2-item-content">
                    <h3>No Queue</h3>
                    <p>
                        We don't like to keep our customers waiting. Order from the app,
                        prepare for payment then catch the train.
                    </p>
                </div>
            </div>
            <div class="row-2-item">
                <div class="row-2-item-img">
                    <img src=" {{ asset('images/index/cheap.png') }} " alt="Clock Icon">
                </div>
                <div class="row-2-item-content">
                    <h3>Fresh Cheap Coffee</h3>
                    <p>
                        Coffee is freshly brewed! You can literally take it from the stall
                        as soon as you arrive. Take one for as little as £1.
                    </p>
                </div>
            </div>
            <div class="row-2-item">
                <div class="row-2-item-img">
                    <img src=" {{ asset('images/index/coffee.png') }} " alt="Clock Icon">
                </div>
                <div class="row-2-item-content">
                    <h3>Make it Personal</h3>
                    <p>
                        You are free to personalise your coffee the way you want it
                        from the deepest detail on how many seconds you want it stirred!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row-3">
        <h2>Subscribe, get a <span>free</span> voucher.</h2>
        <form action="{{ URL::to('/saveemail') }}" method="POST">
            @csrf
            <input type="text" placeholder="Enter email here..." name="emailPrompt">
            <input type="submit" value="Subscribe" name="submitbtn">
        </form>
    </div>
@endsection