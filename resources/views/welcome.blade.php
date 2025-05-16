@extends('layouts.main')
@section('content')

	{{-- Chodnikowiec --}}
    <section class="hero-wrap js-fullheight" style="background-image: url(images/bg-2.jpg);"
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
    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters">
                <div class="col-md text-center d-flex align-items-stretch">
                    <div class="services-wrap d-flex align-items-center img"
                        style="background-image: url(images/formen.jpg);">
                        <div class="text">
                            <h3>Dla mężczyzn</h3>
                            <p><a href="#" class="btn-custom">Zobacz ceny<span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 text-center d-flex align-items-stretch">
                    <div class="text-about py-5 px-4">
                        <h1 class="logo">
                            <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>Studio Fryzur</a>
                        </h1>
                        <h2>Zapraszamy do naszego Salonu</h2>
                        <p>Opis salonu jest piękny</p>
                        <p class="mt-3"><a href="#" class="btn btn-primary btn-outline-primary">Przeczytaj więcej</a></p>
                    </div>
                </div>
                <div class="col-md text-center d-flex align-items-stretch">
                    <div class="services-wrap d-flex align-items-center img"
                        style="background-image: url(images/forwomen.jpg);">
                        <div class="text">
                            <h3>Dla kobiet</h3>
                            <p><a href="#" class="btn-custom">Zobacz ceny<span
                                        class="ion-ios-arrow-round-forward"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	{{-- Menu usług --}}
    <section class="services-section ftco-section">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Usługi</span>
                    <h2 class="mb-4">Menu usług</h2>
                    <p>Piękny opis usług</p>
                </div>
            </div>
            <div class="row no-gutters d-flex">
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon"><span class="flaticon-male-hair-of-head-and-face-shapes"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Ostrzyżenie &amp; Stylizacja</h3>
                            <p>Piękny opis Ostrzyżenia &amp; Stylizacji</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon"><span class="flaticon-beard"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Broda</h3>
                            <p>Piękny opis Brody</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon"><span class="flaticon-beauty-products"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Makijaż</h3>
                            <p>Piękny opis Makijaży</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
                    <div class="media block-6 services d-block text-center">
                        <div class="icon"><span class="flaticon-healthy-lifestyle-logo"></span></div>
                        <div class="media-body">
                            <h3 class="heading mb-3">Zabieg na ciało</h3>
                            <p>Piękny opis Zabiegu na ciało</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

	{{-- Rezerwacja --}}
    <section class="ftco-section ftco-booking bg-light">
        <div class="container ftco-relative">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Rezerwacja</span>
                    <h2 class="mb-4">Umów się</h2>
                    <p>Piękny opis umowenia</p>
                </div>
            </div>
            <h3 class="vr">Zadzwoń do nas: +48 606 861 661</h3>
            <div class="row justify-content-center">
                <div class="col-md-10 ftco-animate">
                    <form action="#" class="appointment-form">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_name" placeholder="Imię">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="appointment_email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_date" placeholder="Data rezerwacji">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control appointment_time" placeholder="Czas rezerwacji">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <div class="select-wrap">
                                        <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                        <select name="" id="" class="form-control">
                                            <option value="">Makijaż</option>
                                            <option value="">Manicure Pedicure</option>
                                            <option value="">Zabieg na ciało</option>
                                            <option value="">Ostrzyżenie &amp; Kolorowanie</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="phone" placeholder="Telefon">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Wiadomość"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Umawiać się" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Specjaliści --}}
    <section class="ftco-section ftco-team">
        <div class="container-fluid px-md-5">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Specjaliści</span>
                    <h2 class="mb-4">Fryzjerzy</h2>
                    <p>Piękny opis specjalistów</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <div class="carousel-team owl-carousel">
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/stylist-1.jpg);"></div>
                                <h2>Danica Lewis</h2>
                                <span class="position">Fryzjerka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/stylist-2.jpg);"></div>
                                <h2>Nicole Simon</h2>
                                <span class="position">Fryzjerka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/stylist-3.jpg);"></div>
                                <h2>Anita Kawacz</h2>
                                <span class="position">Directorka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/stylist-4.jpg);"></div>
                                <h2>Rachel Clinton</h2>
                                <span class="position">Fryzjerka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url(images/stylist-5.jpg);"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Barber</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
        <div class="container-fluid p-0">
            <div class="row no-gutters">
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-1.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Stylista</span>
                            <h3><a href="project.html">Broda</a></h3>
                        </div>
                        <a href="images/work-1.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-2.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Uroda</span>
                            <h3><a href="project.html">Strzyżenie włosów</a></h3>
                        </div>
                        <a href="images/work-2.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-3.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Uroda</span>
                            <h3><a href="project.html">Hairstylist</a></h3>
                        </div>
                        <a href="images/work-3.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-4.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Uroda</span>
                            <h3><a href="project.html">Strzyżenie włosów</a></h3>
                        </div>
                        <a href="images/work-4.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-5.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Uroda</span>
                            <h3><a href="project.html">Makeup</a></h3>
                        </div>
                        <a href="images/work-5.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-6.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Styl</span>
                            <h3><a href="project.html">Modelka</a></h3>
                        </div>
                        <a href="images/work-6.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-7.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Uroda</span>
                            <h3><a href="project.html">Makeup</a></h3>
                        </div>
                        <a href="images/work-7.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 ftco-animate">
                    <div class="project">
                        <img src="images/work-8.jpg" class="img-fluid" alt="Colorlib Template">
                        <div class="text">
                            <span>Uroda</span>
                            <h3><a href="project.html">Makeup</a></h3>
                        </div>
                        <a href="images/work-8.jpg"
                            class="icon image-popup d-flex justify-content-center align-items-center">
                            <span class="icon-expand"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Ceny --}}
    <section class="ftco-section ftco-pricing">
        <div class="container">
            <div class="row justify-content-center pb-3">
                <div class="col-md-10 heading-section text-center ftco-animate">
                    <span class="subheading">Ceny</span>
                    <h2 class="mb-4">Naszy ceny</h2>
                    <p>piękny opis ceny</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Hair Style</h3>
                            <p><span class="price">$50.00</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Hair Dryer</li>
                            <li>Hair Coloring</li>
                            <li>Hair Cut</li>
                            <li>Hair Dresser</li>
                            <li>Hair Spa</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Manicure Pedicure</h3>
                            <p><span class="price">$34.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Manicure</li>
                            <li>Pedicure</li>
                            <li>Coloring</li>
                            <li>Nails</li>
                            <li>Nail Cut</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry active pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Makeup</h3>
                            <p><span class="price">$54.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Makeup</li>
                            <li>Professional Makeup</li>
                            <li>Blush On</li>
                            <li>Facial Massage</li>
                            <li>Facial Spa</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                        </p>
                    </div>
                </div>
                <div class="col-md-3 ftco-animate">
                    <div class="pricing-entry pb-5 text-center">
                        <div>
                            <h3 class="mb-4">Body Treatment</h3>
                            <p><span class="price">$89.50</span> <span class="per">/ session</span></p>
                        </div>
                        <ul>
                            <li>Massage</li>
                            <li>Spa</li>
                            <li>Foot Spa</li>
                            <li>Body Spa</li>
                            <li>Relaxing</li>
                        </ul>
                        <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Recenzje --}}
    <section class="testimony-section bg-light">
        <div class="container">
            <div class="row ftco-animate justify-content-center">
                <div class="col-md-6 col-lg-5 d-flex">
                    <div class="testimony-img" style="background-image: url(images/testimony-img.jpg);"></div>
                </div>
                <div class="col-md-6 col-lg-7 py-5 pl-md-5">
                    <div class="py-md-5">
                        <div class="heading-section ftco-animate">
                            <span class="subheading">Recenzje</span>
                            <h2 class="mb-0">Recenzje klientów</h2>
                        </div>
                        <div class="carousel-testimony owl-carousel ftco-animate">
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Piękny opis opinii klientów</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-1.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Piękny opis opinii klientów</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-2.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Piękny opis opinii klientów</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-3.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Piękny opis opinii klientów</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-4.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimony-wrap pb-4">
                                    <div class="text">
                                        <p class="mb-4">Piękny opis opinii klientów</p>
                                    </div>
                                    <div class="d-flex">
                                        <div class="user-img" style="background-image: url(images/stylist-5.jpg)">
                                        </div>
                                        <div class="pos ml-3">
                                            <p class="name">Jeff Nucci</p>
                                            <span class="position">Businessman</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('includes.footer')

@endsection('content')
