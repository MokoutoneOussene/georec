<!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="{{route('home')}}" class="logo me-auto"><img src="{{asset('assets/img/logo.png')}}" alt=""></a>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('home')}}"> Accueil </a></li>
          <li><a class="nav-link scrollto" href="{{route('realisation')}}">Nos réalisations</a></li>
          <li><a class="nav-link scrollto" href="{{route('publications')}}">Informez-vous</a></li>
          <li><a class="nav-link scrollto" href="{{route('media')}}">Mediathèque</a></li>
          <li><a class="nav-link scrollto" href="{{route('about')}}">A propos</a></li>
          <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="{{route('about')}}" class="get-started-btn scrollto">Explorer maintenant</a>
    </div>
  </header><!-- End Header -->
