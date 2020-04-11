@extends('layouts.app')

@section('title', 'Holmes Travel')

@section('content')

    <!-- header -->
    <header class="">
        <h2>Klik untuk memulai<br>Petualanganmu!</h2>
        <a href="#paket-istimewa" class="btn btn-get-started btn-primary mt-3 px-auto py-auto">
            Get Started
        </a>
    </header>

    <!-- main content -->
    <!-- background linear -->
    <div class="bg-linear"></div>
    <!-- content -->
    <div class="container pt-3 pb-3">
        <section class="section-paket-istimewa" id="paket-istimewa">
            <h2>Paket Istimewa</h2>
            <div class="row text-center">
                <div class="col-12 col-sm-6 col-md-4 col-lg-4 pt-3">
                    <div class="card-paket-istimewa rounded-0 d-flex flex-column text-center" style="background-image: url('../images/bg-bromo.jpg'); background-size: cover;">
                        <div class="title-paket-istimewa py-5">
                            <h3>BROMO</h3>
                        </div>
                        <div class="istimewa-button mt-auto pb-4">
                             <a href="{{ route('detail') }}" class="btn link-to-details px-4 py-2">
                                View Detail
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 pt-3">
                    <div class="card-paket-istimewa rounded-0 d-flex flex-column text-center" style="background-image: url('../images/bg-bali.jpg'); background-size: cover;">
                        <div class="title-paket-istimewa py-5">
                        <h3>EVERYDAY IN BALI</h3>
                        </div>
                        <div class="istimewa-button mt-auto pb-4">
                        <a href="{{ route('detail') }}" class="btn link-to-details px-4 py-2">
                            View Detail
                        </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-4 col-lg-4 pt-3">
                <div class="card-paket-istimewa rounded-0 d-flex flex-column text-center" style="background-image: url('../images/bg-raja-ampat.jpg'); background-size: cover;">
                    <div class="title-paket-istimewa py-5">
                        <h3>RAJA AMPAT</h3>
                    </div>
                    <div class="istimewa-button mt-auto pb-4">
                        <a href="{{ route('detail') }}" class="btn link-to-details px-4 py-2">
                        View Detail
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-statistika" id="statistika">
            <h2>Statistika</h2>

            <div class="row text-center p-3">
            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto" style="background-color: #851539;">
                <h4>100K</h4>
                <p>User</p>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto" style="background-color: #1896AB;">
                <h4>100</h4>
                <p>Hotel</p>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto" style="background-color: #7137C9;">
                <h4>30</h4>
                <p>Paket</p>
            </div>

            <div class="col-12 col-sm-6 col-md-3 col-lg-3 mx-auto" style="background-color: #17103A;">
                <h4>7</h4>
                <p>Network</p>
            </div>
            </div>
        </section>
        
        <section class="section-testimonial" id="testimonial">
            <h2 class="text-center">TESTIMONIAL</h2>
            <div class="owl-carousel row text-center p-3">
            
            <div class="col">
                <div class="card">
                <img src="images/user_testimonial_4.png" alt="" class="w-50 mx-auto mt-5">
                <div class="card-body">
                    <h5 class="card-title">Lugas Alhawariy</h5>
                    <p class="card-text">
                    " Pelayanan cepat, dan tanggap.
                    Iklan pun tidak membohongi, 
                    dan itu real! "</p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/user_testimonial_1.png" alt="" class="w-50 mx-auto mt-5">
                <div class="card-body">
                    <h5 class="card-title">Mickel Jeans</h5>
                    <p class="card-text">
                    " Initially just trial and error, 
                    but I am very addicted to holidays 
                    in this site package "
                    </p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/user_testimonial_2.png" alt="" class="w-50 mx-auto mt-5">
                <div class="card-body">
                    <h5 class="card-title">Annie Hundson</h5>
                    <p class="card-text">
                    " I always remember last holiday, 
                    and it was very fun "
                    </p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/user_testimonial_3.png" alt="" class="w-50 mx-auto mt-5">
                <div class="card-body">
                    <h5 class="card-title">Grock Melasho</h5>
                    <p class="card-text">
                    " Espero ir de vacaciones a Raja Ampat 
                    nuevamente con mi novia. "
                    </p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/user_testimonial_6.png" alt="" class="w-50 mx-auto mt-5">
                <div class="card-body">
                    <h5 class="card-title">Liliana Shaheer </h5>
                    <p class="card-text">
                    " Je me sens comme un roi et ce site offre 
                    le meilleur service de ma vie. "
                    </p>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="images/user_testimonial_5.png" alt="" class="w-50 mx-auto mt-5">
                <div class="card-body">
                    <h5 class="card-title">Kuva Sonnie Rez</h5>
                    <p class="card-text">
                    " All'inizio erano solo tentativi ed errori, 
                    ma ero dipendente e potevo tornare a scegliere un altro pacchetto vacanza "
                    </p>
                </div>
                </div>
            </div>

            </div>
        </section>
    </div>
@endsection