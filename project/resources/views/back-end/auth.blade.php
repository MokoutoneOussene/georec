<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    @include('back-end.layouts.style')
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('font/img/Canal_logo.png') }}" alt="">
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3 shadow">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">AUTHENTIFICATION</h5>
                                        <p class="text-center small">Veillez renseignez votre identifiant et votre
                                            password</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{route('login')}}" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">E-mail</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-person-bounding-box"></i></span>
                                                <input type="text" name="email" class="form-control" required>
                                                <div class="invalid-feedback">Renseignez votre identifiant</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control" required>
                                            <div class="invalid-feedback">Renseignez votre password !</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Se souvenir de moi
                                                    !</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-dark w-100" type="submit">Se connecter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="credits">
                                Copyright <a href="" class="text-danger">Mokutech</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('back-end.layouts.js')
</body>

</html>
