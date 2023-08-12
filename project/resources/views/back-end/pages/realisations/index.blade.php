@extends('back-end.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-dark mt-3" href="{{ route('gestion_realisation.create') }}">Nouveau</a>
                        <h3 class="m-2 text-center text-danger">LISTE DES REALISATIONS</h3>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom realisation</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Lieu</th>
                                    {{-- <th scope="col">Detail</th> --}}
                                    <th scope="col">Editer</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($realisations as $real)
                                    <tr>
                                        <th scope="row">{{ $real->id }}</th>
                                        <td>{{ $real->nom_prog }}</td>
                                        <td>{{ $real->date }}</td>
                                        <td>{{ $real->lieu }}</td>
                                        {{-- <td> <a href="{{ route ('gestion_pubs.show', [$pub->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td> --}}
                                        <td> <a href="{{ route('gestion_realisation.edit', [$real->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td>
                                        <td> <a href="{{ url('destroy_realisation/' . $real->id) }}"><i class="bx bx-message-square-x text-danger" aria-hidden="true"></i></a></td>
                                    </tr>

                                @empty
                                    <p class="text-danger">Aucune réalisation inscrite</p>
                                @endforelse
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
