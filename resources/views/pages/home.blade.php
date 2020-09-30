@extends('layouts.app')

@section('title')
NOMADS
@endsection

@section('content')
<!-- Header -->
<header class="text-center">
    <h1>Explore The Beautiful World
        <br>
        As Easy One Click</h1>
        <p class="mt-3">
            You will see beautiful moment
            <br>
            you never see before
        </p>
        <a href="#" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
</header>
<main>
    <div class="container">
        <section class="section-stats row justify-content-center" id="stats">
            <div class="col-3 col-md-2 stats-detail">
                <h2>20k</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>12</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>3k</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>72</h2>
                <p>Partners</p>
            </div>
        </div>
        </section>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you try
                            <br>
                            before in this world
                        </p>
                    </div>
                </div>
            </div>
        </section>

    <!--Card-Destination  -->
        <section class="section-popular-content" id="popularContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/bali.jpeg')">
                           <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">Deratan,Bali</div>
                            <div class="travel-button mt-auto">
                            <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/bromo.jpg')">
                           <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">Bromo,Malang</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/j.jpg')">
                           <div class="travel-country">Europe</div>
                            <div class="travel-location">Swiss</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column" style="background-image:url('frontend/images/dubai.jpg')">
                           <div class="travel-country">Middle East</div>
                            <div class="travel-location">Dubai</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail')}}" class="btn btn-travel-details px-4">
                                    View Details
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Social Network -->
        <section class="section-network" id="network">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Network</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/partner.png" alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>
        <section class="section-testimonials-heading" id="testimonialsHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonials-content" id="testimonialsContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm6-col-md-6 col-lg-4">
                        <div class="card card-testimonials text-center">
                            <div class="testimonial-content mt-4">
                                <img src="{{url('frontend/images/user.png')}}" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4"> User Testimonial </h3>

                                    <p class="testimonials">
                                         "It was glorius and i not could stop to say woohooo for every single moments dankeee"
                                    </p>
                                </h3>
                            </div>
                            <hr/>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm6-col-md-6 col-lg-4">
                        <div class="card card-testimonials text-center">
                            <div class="testimonial-content mt-4">
                                <img src="frontend/images/user.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4"> User Testimonial </h3>

                                    <p class="testimonials">
                                         "It was glorius and i not could stop to say woohooo for every single moments dankeee"
                                    </p>
                                </h3>
                            </div>
                            <hr/>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonials text-center">
                            <div class="testimonial-content mt-4">
                                <img src="frontend/images/user.png" alt="user" class="mb-4 rounded-circle">
                                <h3 class="mb-4"> User Testimonial </h3>

                                    <p class="testimonials">
                                         "It was glorius and i not could stop to say woohooo for every single moments dankeee"
                                    </p>
                                </h3>
                            </div>
                            <hr/>
                            <p class="trip-to mt-2">
                                Trip to Ubud
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I Need Help
                        </a>
                        <a href="#" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>

</main>
@endsection
