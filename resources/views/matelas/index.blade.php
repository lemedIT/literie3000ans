@extends('layouts.app')

@section('content')
    <h1>Liste des Matelas</h1>

    @foreach($matelas as $m)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $m->marque }}</h5>
                <p class="card-text">Taille: {{ $m->taille }}</p>
                <p class="card-text">Prix: {{ $m->prix }} €</p>
                <a href="{{ url("/matelas/$m->id/edit") }}" class="btn btn-primary">Modifier</a>
                <form action="{{ url("/matelas/$m->id") }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Supprimer</button>
                </form>
            </div>
        </div>
    @endforeach
@endsection
