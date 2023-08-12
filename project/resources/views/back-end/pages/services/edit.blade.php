@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_services.index') }}">Liste service</a>
            <h3 class="m-2 text-center text-danger">MODIFICATION DU SERVICE N°: {{$services->id}}</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3 m-3" method="POST" action="{{route ('gestion_services.update', [$services->id])}}" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Nom service</label>
                    <input type="text" Name="nom" value="{{$services->nom}}" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Image</label>
                    <input type="file" Name="img" class="form-control" id="inputName5">
                </div>
                <div class="col-md-12 mb-2">
                    <label for="inputPassword" class="form-label">Description</label>
                    <textarea class="form-control" Name="description" cols="30" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
