<!-- ======= Team Section ======= -->
<section id="team" class="team section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Membres du bureau</h2>
            <p>Georec est composée d'une equipe pluri-disciplinaire</p>
        </div>

        <div class="row">

            @forelse ($teams as $team)
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                <div class="member" data-aos="fade-up" data-aos-delay="100">
                    <div class="member-img">
                        <img src="{{ asset('storage') . '/' . $team->img }}" class="img-fluid" alt="">
                        <div class="social">
                            <a href="{{$team->twitter}}" target="_blank"><i class="bi bi-twitter"></i></a>
                            <a href="{{$team->facebook}}" target="_blank"><i class="bi bi-facebook"></i></a>
                            <a href="{{$team->whatsapp}}" target="_blank"><i class="bi bi-instagram"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>{{$team->nom}}</h4>
                        <span>{{$team->titre}}</span>
                    </div>
                </div>
            </div>
            @empty
            <h3 class="text-danger">Aucun membres inscrit</h3>

            @endforelse

        </div>
    </div>
</section><!-- End Team Section -->

