@extends('front-end.layouts.main')

@section('content')
    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3 class="text-danger">A PROPOS DE GeoReC</h3>
                        <p>
                            Geosciences Research and Consulting SARL est une structure spécialisée dans l’Expertise et la
                            Consultance dans divers domaines des Géosciences. GeoReC est basée en Côte d’Ivoire et au
                            Burkina Faso, et exerce dans toute l’Afrique de l’Ouest. GeoReC fournit une gamme variée de
                            services techniques: Exploration et Mine, Géophysique et Géotechnique, Pédologie, Hydrologie et
                            Hydrogéologie, Agriculture, Cartographie et SIG, Environnement et Développement Durable,
                            Recherche Scientifique et Innovation Technologique, Formation et suivi des projets, Divers.
                        </p>
                        <div class="col-lg-12 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/img/georec/IMG-20220701-WA0026.jpg') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="col-lg-12 order-1 order-lg-2 text-center">
                            <img src="{{ asset('assets/img/georec/IMG-20220701-WA0075.jpg') }}" alt="" class="img-fluid">
                        </div>
                        <h3 class="text-danger text-center">Qualification de GeoReC</h3>
                        <p>
                            GeoReC comprend des professionnels dynamiques et expérimentés (géologues, chercheurs,
                            ingénieurs, techniciens) de domaines multidisciplinaires qui travaillent ensemble dans un esprit
                            d’équipe pour assurer un service de qualité au client. GeoReC regorge d’un personnel qualifié,
                            de haut niveau avec plusieurs années d’expériences acquises dans des compagnies nationales et
                            internationales. À cet effet, GeoReC a démontré sa capacité professionnelle, satisfaisant ainsi
                            ses clients ou partenaires par la qualité de son travail. GeoReC a déjà travaillé sur plusieurs
                            projets et plusieurs compagnies minières en Afrique de l’Ouest. Cette entreprise assure
                            également des formations ou perfectionnement dans divers domaines (géologie, exploration,
                            exploitation, SIG et logiciels, etc.) pour étudiants, diplômés et cadres d’entreprise
                        </p>
                    </div><!-- End .content-->
                </div>
                <h4 class="text-danger"><a href="{{asset('doc/CV_MISE_A_JOUR_Juin 2022.pdf')}}" target="_blank">Voir les CV</a></h4>
            </div>

        </div>
    </section>

    <!-- ======= Clients Section ======= -->

    @include('front-end.pages.partenaire')

    <!-- End Clients Section -->

    <!-- ======= references Section ======= -->

    @include('front-end.pages.reference')

    <!-- End references Section -->

    <!-- ======= references Section ======= -->

    @include('front-end.pages.team')

    <!-- End references Section -->
@endsection
