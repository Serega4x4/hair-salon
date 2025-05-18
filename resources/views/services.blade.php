{{-- services --}}
@extends('layouts.main')
@section('content')

    <section class="hero-wrap hero-wrap-2" style="background-image: url('{{ asset('images/bg-1.jpg') }}');"
        data-stellar-background-ratio="0.5">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
                <div class="col-md-9 ftco-animate pb-5 text-center">
                    <h2 class="mb-0 bread">Services</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('main.index') }}">Główna <i
                                    class="ion-ios-arrow-round-forward"></i></a></span> <span>Usługi <i
                                class="ion-ios-arrow-round-forward"></i></span></p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.service_menu')

    @include('includes.booking')

    @include('includes.price')
