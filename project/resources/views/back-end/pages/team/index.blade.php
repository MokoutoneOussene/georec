@extends('back-end.layouts.main')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <a class="btn btn-dark mt-3" href="{{route('gestion_teams.create')}}">Nouveau</a>
                        <h3 class="m-2 text-center text-danger">LISTE DES MEMBRES DU BUREAU</h3>

                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Titre</th>
                                    {{--  <th scope="col">Detail</th>  --}}
                                    <th scope="col">Editer</th>
                                    <th scope="col">Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($teams as$team)
                                <tr>
                                    <th scope="row">{{$team->id}}</th>
                                    <td>{{$team->nom}}</td>
                                    <td>{{$team->titre}}</td>
                                    {{-- <td> <a href="{{ route ('gestion_teams.show', [$team->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td> --}}
                                    <td> <a href="{{ route('gestion_teams.edit', [$team->id]) }}"><i class="bx bxs-pencil text-success" aria-hidden="true"></i></a> </td>
                                    <td> <a href="{{ url('destroy_teams/' . $team->id) }}"><i class="bx bx-message-square-x text-danger" aria-hidden="true"></i></a></td>
                                </tr>
                                @empty
                                <p class="text-danger">Aucun membre inscrit</p>
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
