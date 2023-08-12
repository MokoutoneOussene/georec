<section id="portfolio" class="portfolio mt-5">
    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Nos réalisations</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                @forelse ($realisations as $realisa)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="{{ asset('storage') . '/' . $realisa->img }}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{ $realisa->nom_prog }}</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="{{ asset('storage') . '/' . $realisa->img }}"
                                        data-gallery="portfolioGallery" class="portfolio-lightbox"
                                        title="{{ $realisa->nom_prog }}"><i class="bx bx-plus"></i></a>
                                    <a href="{{ route('gestion_realisation.show', [$realisa->id]) }}"
                                        title="Voir plus"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <h4 class="text-danger">Aucune réalisation</h4>
                @endforelse
            </div>
        </div>
    </div>
</section>
