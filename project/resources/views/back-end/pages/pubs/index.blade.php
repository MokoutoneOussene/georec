@extends('back-end.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-dark mt-3" href="{{ route('gestion_pubs.create') }}">Nouveau</a>
                        <h3 class="m-2 text-center text-danger">LISTE DES PUBLICATIONS</h3>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Titre pub</th>
                                    <th scope="col">Lieu pub</th>
                                    <th scope="col">Date pub</th>
                                    {{--  <th scope="col">Details</th>  --}}
                                    <th scope="col">Editer</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($pubs as $pub)
                                    <tr>
                                        <th scope="row">{{ $pub->id }}</th>
                                        <td>{{ $pub->nom_pub }}</td>
                                        <td>{{ $pub->lieu }}</td>
                                        <td>{{ $pub->date }}</td>
                                        {{--  <td> <a href="{{ route ('gestion_pubs.show', [$pub->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td>  --}}
                                        <td> <a href="{{ route ('gestion_pubs.edit', [$pub->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td>
                                        <td> <a href="{{url ('destroy_pubs/'.$pub->id) }}"><i class="bx bx-message-square-x text-danger" aria-hidden="true"></i></a> </td>
                                    </tr>
                                @empty
                                <p class="text-danger">Aucune publication inscrite</p>
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
