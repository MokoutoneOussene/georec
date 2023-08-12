<!DOCTYPE html>
<html lang="en">

<head>
    @include('back-end.layouts.style')
    <title>Dashboard Admin</title>
</head>

<body>

    @include('back-end.required.topbar')

    @include('back-end.required.sidebar')

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Dashboard</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Accueil</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">

                        @yield('content')

                    </div>
                </div><!-- End Left side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    @include('back-end.layouts.js')

</body>

</html>
