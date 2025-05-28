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
                    @foreach ($users as $user)
                        <div class="item">
                        <a href="#" class="team text-center">
                            <div class="img" style="background-image: url('{{ asset('images/stylist-1.jpg') }}');">
                            </div>
                            <h2>{{ $user->name }}</h2>
                            <span class="position">Fryzjerka</span>
                        </a>
                    </div>
                    @endforeach
                    
                    {{-- <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url('{{ asset('images/stylist-2.jpg') }}');"></div>
                                <h2>Nicole Simon</h2>
                                <span class="position">Fryzjerka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url('{{ asset('images/stylist-3.jpg') }}');"></div>
                                <h2>Anita Kawacz</h2>
                                <span class="position">Directorka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url('{{ asset('images/stylist-4.jpg') }}');"></div>
                                <h2>Rachel Clinton</h2>
                                <span class="position">Fryzjerka</span>
                            </a>
                        </div>
                        <div class="item">
                            <a href="#" class="team text-center">
                                <div class="img" style="background-image: url('{{ asset('images/stylist-5.jpg') }}');"></div>
                                <h2>Dave Buff</h2>
                                <span class="position">Barber</span>
                            </a>
                        </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
