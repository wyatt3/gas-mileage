@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mt-2 mb-4">Welcome to My Cars!</h1>
    <div class="row bg-primary-trans rounded px-5 pt-5 pb-3">
        <div class="col-12 col-lg-7 text-light">
            <h3>About My Cars</h3>
            <p class="about text-justify">My Cars is a web based application 
            dedicated to car care! With an account, you can create cars, track your gas mileage,
            and record any maintenance you do to your car.
            @guest
            My Cars is a free application and always will be, so sign up today!<br>
            <a class="btn btn-dark mt-3 px-5 py-2" href="{{ route('register') }}">Sign Up</a>
            @endguest 
            </p>
        </div>
        <div class="col-12 col-lg-5 text-center"><img class="rounded" src="{{ asset('img/about1.jpg') }}" width="100%"></div>
    </div>
    <div class="row bg-dark-trans rounded mt-3 px-5 pt-0 pb-3">
        <div class="col-12 col-lg-5 text-center"><img src="{{ asset('img/avataaars.svg') }}" alt="" height="100%"></div>
        <div class="col-12 col-lg-7 pt-5 text-right text-light">
            <h3>About Me</h3>
            <p class="about text-justify">I am Wyatt Johnson. I created this website as one of my final projects in the Web &amp; Mobile Development Program at Bridgerland Technical College. If you like this app, check out my portfolio <a href="https://www.wj-web-projects.xyz">here</a>! I have many other apps and I am constantly updating my portfolio with new projects.</p>
        </div>
    </div>
    <div class="row bg-primary-trans rounded mt-3 px-5 pt-3 pb-3">
        <div class="col-12 col-lg-6 text-light pt-4">
            <h3>Need Help?</h3>
            <p class="about text-justify">Need help with your account? Or have any unanswered questions? Feel free to contact me <a class="text-dark" href="mailto:wyatt.johnson@wj-web-projects.xyz">here</a> and I'll get back to you as soon as I can!</p>
        </div>
        <div class="col-12 col-lg-6 text-center"><img src="{{ asset('img/question.png') }}" width="50%"></div>
    </div>
</div>
@endsection