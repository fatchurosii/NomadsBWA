@extends('layouts.success')

@section('title','Checkout Success')

@section('content')
<main>
    <div class="section-success d-flex align-items-center">
        <div class="col text-center">
            <img src="{{url('frontend/images/checkout.png')}}" alt="">
            <h1>
                Yay! Success
            </h1>
            <p>
                We've sent you email for trip instruction
                <br>
                Please Read it as well
            </p>
            <a href="{{route('home')}}" class="btn btn-home-page mt-3 px-3">
                Home Page
            </a>

        </div>
    </div>
</main>
@endsection


