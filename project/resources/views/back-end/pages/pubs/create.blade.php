@extends('back-end.layouts.main')

@section('content')
    <div class="card">
        <div class="card-body">

            <a class="btn btn-dark mt-3" href="{{ route('gestion_pubs.index') }}">Liste publication</a>
            <h3 class="m-2 text-center text-danger">NOUVELLE PUBLICATION</h3>

            <!-- Multi Columns Form -->
            <form class="row g-3" method="POST" action="{{route('gestion_pubs.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="inputEmail5" class="form-label">Nom publication</label>
                    <input type="text" name="nom_pub" class="form-control" id="inputEmail5">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Lieu</label>
                    <input type="text" name="lieu" class="form-control" id="inputPassword5">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Date</label>
                    <input type="date" name="date" class="form-control" id="inputZip">
                </div>
                <div class="col-md-6">
                    <label for="inputPassword5" class="form-label">Heure</label>
                    <input type="time" name="heure" class="form-control" id="inputPassword5">
                </div>
                <div class="col-md-6">
                    <label for="inputZip" class="form-label">Image</label>
                    <input type="file" name="img" class="form-control" id="inputZip">
                </div>
                <div class="col-md-12 mb-12">
                    <label for="inputPassword" class="form-label">Description</label>
                    <textarea class="form-control" Name="descript" cols="30" rows="5"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-dark">Enregistrer</button>
                    <button type="reset" class="btn btn-danger">Annuler</button>
                </div>
            </form><!-- End Multi Columns Form -->
        </div>
    </div>
@endsection
