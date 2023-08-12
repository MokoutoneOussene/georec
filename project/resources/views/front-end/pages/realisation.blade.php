@extends('front-end.layouts.main')

@section('content')

    <!-- Header -->
    @include('front-end.required.realisation')
    <!-- Header End -->

    <!-- Header -->
    @include('front-end.required.banniere')
    <!-- Header End -->

    <!-- ======= Services Section ======= -->
    @include('front-end.pages.services')
    <!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    @include('front-end.pages.partenaire')
    <!-- End Services Section -->

@endsection
