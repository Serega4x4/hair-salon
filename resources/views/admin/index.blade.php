{{-- index --}}
@extends('layouts.main')
@section('content')
    {{-- Chodnikowiec --}}
    <section class="hero-wrap js-fullheight" style="background-image: url('{{ asset('images/bg-2.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
                <div class="col-lg-12 ftco-animate d-flex align-items-center">
                    <div class="text text-center">
                        <span class="subheading">Zapraszamy do naszego Salonu</span>
                        <h1 class="mb-4">Dbamy o Twoje włosy profesjonalnie</h1>
                        <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-2">Zarezerwuj teraz</a></p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    {{-- wstęp --}}
    @include('includes.gender_chose')

    {{-- Menu usług --}}
    @include('includes.service_menu')

    {{-- Rezerwacja --}}
    @include('includes.booking')

    {{-- Specjaliści --}}
    @include('includes.master')

    {{-- Galeria --}}
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters justify-content-center mb-5 pb-2">
                <div class="col-md-6 text-center heading-section ftco-animate">
                    <span class="subheading">Galeria</span>
                    <h2 class="mb-4">Nasze prace</h2>
                    <p>Piękny opis galerii</p>
                </div>
            </div>
        </div>
        @include('includes.gallery')
    </section>


    {{-- Ceny --}}
    @include('includes.price')

    {{-- Recenzje --}}
    @include('includes.review')
    
@endsection('content')
