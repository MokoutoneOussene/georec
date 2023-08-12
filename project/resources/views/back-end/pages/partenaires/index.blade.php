@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <a class="btn btn-dark m-3" href="{{ route('gestion_partenaire.create') }}">Nouveau</a>

            @forelse ($partners as $partner)
                <div class="col-lg-3">
                    <!-- Card with an image on top -->
                    <div class="card">
                        <img src="{{ asset('storage') . '/' . $partner->img }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $partner->nom }}</h5>
                            <div class="text-center">
                                <a href="{{ route('gestion_partenaire.edit', [$partner->id]) }}"><i
                                        class="bx bxs-pencil text-success" aria-hidden="true"></i></a>
                                <a href="{{ url('destroy_partenaire/' . $partner->id) }}"><i
                                        class="bx bx-message-square-x text-danger" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div><!-- End Card with an image on top -->
                </div>
            @empty
                <p class="text-danger">Aucun partenaire inscrit</p>
            @endforelse
        </div>
    </div>
@endsection
