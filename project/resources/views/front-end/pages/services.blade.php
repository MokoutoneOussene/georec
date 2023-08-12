<!-- ======= Services Section ======= -->
<section id="services" class="services section-bg ">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Services</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
            </p>
        </div>

        <div class="row">
            @forelse ($services as $serv)
                <div class="col-md-6">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <i class="bi bi-briefcase"></i>
                        <h4><a href="#">{{ $serv->nom }}</a></h4>
                        <p>{{ $serv->description }}</p>
                    </div>
                </div>
            @empty
            @endforelse
        </div>

    </div>
</section><!-- End Services Section -->
