@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_teams.index') }}">Liste des membres</a>
            <h3 class="m-2 text-center text-danger">NOUVEAU MEMBRE</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="POST" action="{{route('gestion_teams.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <label for="inputName5" class="form-label">Nom complet</label>
                    <input type="text" name="nom" class="form-control" id="inputName5">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail5" class="form-label">Titre</label>
                    <input type="text" name="titre" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control" id="inputPassword5">
                </div>
                <div class="col-6">
                    <label for="inputAddress5" class="form-label">Facebook</label>
                    <input type="text" name="facebook" class="form-control" id="inputAddres5s">
                </div>
                <div class="col-6">
                    <label for="inputAddress2" class="form-label">Twitter</label>
                    <input type="text" name="twitter" class="form-control" id="inputAddress2">
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Instagram</label>
                    <input type="text" name="whatsapp" class="form-control" id="inputCity">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection
