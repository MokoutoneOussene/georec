<!-- ======= Clients Section ======= -->

<section id="clients" class="clients">
    <h3 class="text-center mb-5">Nos partenaires</h3>
    <div class="container" data-aos="zoom-in">

        <div class="clients-slider swiper">
            <div class="swiper-wrapper align-items-center">
                @forelse ($partners as $partner)
                    <div class="swiper-slide">
                        <img src="{{ asset('storage') . '/' . $partner->img }}" class="img-fluid" alt="">
                    </div>
                @empty
                @endforelse
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section><!-- End Clients Section -->
