<link rel="stylesheet" href=" {{ asset('sass/pages/contact/contact.css') }} ">

@extends('template')

@section('content')
    <main>
        <div class="row-1">
            <div class="row-1-text">
                <h2>Let's Have A Chat</h2>
                <p>What about coffee do you wanna know?</p>
                <form action="{{ URL::to('/savequery') }}" method="POST" class="row-1-text-form">
                    @csrf
                    <input type="text" placeholder="Full Name" name="userName">
                    <input type="text" placeholder="Email" name="userEmail">
                    <textarea placeholder="Feedback" name="userQuery"></textarea>
                    <input type="submit" value="Submit Query">
                </form>
            </div>
            <div class="row-1-img">
                <img src="{{ asset('images/pages/contact/coffee_table.jpg') }}" alt="Coffee On A Table">
            </div>
        </div>
    </main>
@endsection