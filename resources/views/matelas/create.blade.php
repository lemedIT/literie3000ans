@extends('layouts.app')

@section('content')
    <h1>Ajouter un Matelas</h1>

    <form action="{{ url("/matelas") }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="marque" class="form-label">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" required>
        </div>
        <div class="mb-3">
            <label for="taille" class="form-label">Taille</label>
            <input type="text" class="form-control" id="taille" name="taille" required>
        </div>
        <div class="mb-3">
            <label for="prix" class="form-label">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" required>
        </div>
        {{-- new features aie aie aie
        <div class="mb-3">
            <label for="image_url" class="form-label">URL de l'image</label>
            <input type="text" class="form-control" id="image_url" name="image_url">
        </div> --}}
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
@endsection

