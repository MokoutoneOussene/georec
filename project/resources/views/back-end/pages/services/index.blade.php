@extends('back-end.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-dark mt-3" href="{{ route('gestion_services.create') }}">Nouveau</a>
                        <h3 class="m-2 text-center text-danger">LISTE DES SERVICES</h3>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col"> # </th>
                                    <th scope="col">Nom service</th>
                                    <th scope="col">Description</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($services as $servic)
                                    <tr>
                                        <th scope="row">{{$servic->id}}</th>
                                        <td>{{$servic->nom}}</td>
                                        <td>{{$servic->description}}</td>
                                        <td> <a href="{{ route ('gestion_services.edit', [$servic->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td>
                                        <td> <a href="{{url ('destroy_services/'.$servic->id) }}"><i class="bx bx-message-square-x text-danger" aria-hidden="true"></i></a> </td>
                                    </tr>
                                @empty
                                    <p class="text-danger">Aucun service inscrit</p>
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
