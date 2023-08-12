@extends('front-end.layouts.main')

@section('content')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="{{ route('home') }}">Accueil</a></li>
                <li><a href="{{ route('publications') }}">Nos publications</a></li>
                <li>{{ $finds->nom_pub }}</li>
            </ol>
            <h2>{{ $finds->nom_pub }}</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
        <div class="container" data-aos="fade-up">

            <div class="row">

                <div class="col-lg-8 entries">

                    <article class="entry entry-single">

                        <div class="entry-img">
                            <img src="{{ asset('storage') . '/' . $finds->img }}" alt="" class="img-fluid">
                        </div>

                        <h2 class="entry-title">
                            <a href="">{{ $finds->nom_pub }}</a>
                        </h2>

                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                        href="">Georec</a></li>
                                <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                        href="blog-single.html"><time datetime="2020-01-01">{{ $finds->date }}</time></a>
                                </li>
                                <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                        href="blog-single.html">{{ $finds->lieu }}</a></li>
                            </ul>
                        </div>

                        <div class="entry-content">
                            <p>{{ $finds->descript }}</p>
                        </div>

                    </article><!-- End blog entry -->

                </div><!-- End blog entries list -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        <h3 class="sidebar-title">Toutes les réalisations</h3>
                        <div class="sidebar-item recent-posts">
                            @forelse ($pubs as $pub)
                                <div class="post-item clearfix">
                                    <img src="{{ asset('storage') . '/' . $pub->img }}" alt="">
                                    <h4><a href="">{{$pub->nom_pub}}</a></h4>
                                    <time datetime="2020-01-01">{{$pub->date}}</time>
                                </div>
                            @empty
                            <h4 class="text-danger">Aucune realisation</h4>
                            @endforelse
                        </div><!-- End sidebar recent posts-->
                    </div><!-- End sidebar -->
                </div><!-- End blog sidebar -->
            </div>
        </div>
    </section><!-- End Blog Single Section -->
@endsection
