<link rel="stylesheet" href=" {{ asset('sass/pages/about/about.css') }} ">

@extends('template')

@section('content')
    <div class="headline">
        <h1 class="headline">About {{ config('app.name', 'Lovelace') }}</h1>
    </div>
    <main>
        <div class="container">
            <section class="row-1">
                <h2>What is Lovelace?</h2>
                <p>
                    We sell coffee. To be specific, personally brewed coffee. Coffee freshly 
                    blended in which customers do not have to queue. We are mainly found 
                    outside the train stations mentioned in the locations page. All transactions 
                    are done through the app and what makes us different is that customers do not 
                    have to sit, watch and wait for their coffee to be blended because once the 
                    customer ordered, we'll get right on it. Pass by, pay and there you have it. 
                    Fresh blended coffee, no need to line up. Fresh coffee on the go.
                </p>
            </section>
            <section class="row-2 timeline">
                <ul>
                    <li>
                        <div class="date">
                            <h3>January 2020</h3>
                        </div>
                        <div class="content">
                            <h2>The Second It All Began</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras venenatis tincidunt diam non euismod. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc dictum, ex ac cursus malesuada, nibh nisl pellentesque tellus, quis dapibus quam mauris at enim. Nam tincidunt quam ligula, ut finibus lorem ultricies vitae.</p>
                        </div>
                        <div class="gallery">
                            @foreach($images as $image)
                                <img src="{{ $image }} " alt="Gallery Image">
                            @endforeach
                        </div>
                    </li>
                </ul>
            </section>
        </div>
    </main>
@endsection