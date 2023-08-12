@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">
            <a class="btn btn-dark m-3" href="{{ route('gestion_medias.create') }}">Nouveau</a>

            @forelse ($medias as $media)
                <div class="col-lg-3">
                    <!-- Card with an image on top -->
                    <div class="card">
                        <img src="{{ asset('storage') . '/' . $media->img }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $media->titre }}</h5>
                            <div class="text-center">
                                <a href="{{ route('gestion_medias.edit', [$media->id]) }}"><i
                                        class="bx bxs-pencil text-success" aria-hidden="true"></i></a>
                                <a href="{{ url('destroy_medias/' . $media->id) }}"><i
                                        class="bx bx-message-square-x text-danger" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div><!-- End Card with an image on top -->
                </div>
            @empty
                <p class="text-danger">Aucun media inscrit</p>
            @endforelse

        </div>
    </div>
@endsection
