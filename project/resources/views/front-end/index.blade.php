@extends('front-end.layouts.main')

@section('content')

    <!-- Header -->
    @include('front-end.required.banniere')
    <!-- Header End -->

    <!-- ======= Clients Section ======= -->
    @include('front-end.pages.partenaire')
    <!-- End Clients Section -->

    <!-- ======= references Section ======= -->
    @include('front-end.pages.reference')
    <!-- End references Section -->

    <!-- ======= Counts Section ======= -->
    @include('front-end.pages.count')
    <!-- End Counts Section -->

    <!-- ======= Tabs Section ======= -->
    @include('front-end.pages.tabs')
    <!-- End Tabs Section -->

    <!-- ======= Services Section ======= -->
    @include('front-end.pages.services')
    <!-- End Services Section -->

    {{--  @include('front-end.pages.temoyage')  --}}

    @include('front-end.pages.team')

@endsection
