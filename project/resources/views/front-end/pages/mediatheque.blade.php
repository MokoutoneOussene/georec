@extends('front-end.layouts.main')

@section('content')

    <!-- Header -->
    @include('front-end.required.banniere')
    <!-- Header End -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio mt-5">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Notre album photo</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @forelse ($mediatheque as $media)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <div class="portfolio-wrap">
                                <img src="{{ asset('storage') . '/' . $media->img }}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{ $media->titre}}</h4>
                                    <p>App</p>
                                    <div class="portfolio-links">
                                        <a href="{{ asset('storage') . '/' . $media->img }}"
                                            data-gallery="portfolioGallery" class="portfolio-lightbox"
                                            title="{{ $media->titre}}"><i class="bx bx-plus"></i></a>
                                        <a href="#" title=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4 class="text-danger">Aucun media enregistrée</h4>
                    @endforelse
                </div>
            </div>

        </div>
    </section><!-- End Portfolio Section -->

    <!-- Header -->
    @include('front-end.pages.team')
    <!-- Header End -->

@endsection
