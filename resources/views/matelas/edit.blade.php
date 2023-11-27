@extends('layouts.app')

@section('content')
    <h1>Modifier le Matelas</h1>

    <form action="{{ url("/matelas/$matelas->id") }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ $matelas->marque }}" required>
        </div>
        <div class="mb-3">
            <label for="taille" class="form-label">Taille</label>
            <input type="text" class="form-control" id="taille" name="taille" value="{{ $matelas->taille }}" required>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ $matelas->prix }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection
