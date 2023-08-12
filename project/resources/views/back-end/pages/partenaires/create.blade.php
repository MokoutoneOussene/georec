@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_partenaire.index') }}">Liste partenaire</a>
            <h3 class="m-2 text-center text-danger">NOUVEAU PARTENAIRE</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3 m-3" method="POST" action="{{route('gestion_partenaire.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Nom partenaire</label>
                    <input type="text" Name="nom" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6 mb-2">
                    <label for="inputName5" class="form-label">Image</label>
                    <input type="file" Name="img" class="form-control" id="inputName5">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
