@extends('back-end.layouts.main')

@section('content')
    <section class="section">

        @forelse ($messages as $mes)
            <div class="col-xxl-4 col-md-6">
                <div class="card info-card sales-card">

                    <div class="card-body">
                        <h5 class="card-title">{{$mes->nom}} <span>| {{$mes->objet}}</span></h5>

                        <div class="d-flex align-items-center">
                            <div class="card-icon rounded-circle d-flex align-items-center justify-content-center"></div>
                            <div class="ps-3">
                                <h6>{{$mes->email}}</h6>
                                <span class="text-muted small pt-2 ps-1">{{$mes->message}}</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <h4 class="text-danger">Aucun messages inscrit</h4>
        @endforelse

    </section>
@endsection
