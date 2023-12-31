@extends('layouts.app')
@include('navbar.navbar')
@section('content')
    <h1>😴Literie3000</h1>
    <center><a href="{{ url("/matelas/create") }}" class="btn btn-primary">Ajouter un matelas</a></center>

    @if($matelas->count() > 0)
        @foreach($matelas as $m)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $m->marque }}</h5>
                    <p class="card-text">Taille: {{ $m->taille }}</p>
                    <p class="card-text">Prix: {{ $m->prix }} €</p>
                    <a href="{{ url("/matelas/$m->id/edit") }}" class="btn btn-primary">Modifier</a>
                    <form action="{{ url("/matelas/$m->id") }}" method="post" class="d-inline">
                        @csrf <!-- sécurité pour empecher les injections par EX -->
                        @method('DELETE') <br>
                        <button type="submit" class="btn btn-danger">Supprimer</button>
                    </form>
                </div>
            </div>
        @endforeach
    @else
        <p>Aucun matelas trouvé.</p>
    @endif
@endsection

{{-- @extends('layouts.app')
@include('navbar.navbar')
@section('content')
    <h1>😴Literie3000</h1>
    <center><a href="{{ url("/matelas/create") }}" class="btn btn-primary">Ajouter un matelas</a></center>

    @if($matelas->count() > 0)
    @foreach($matelas as $m)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $m->marque }}</h5>
            <p class="card-text">Taille: {{ $m->taille }}</p>
            <p class="card-text">Prix: {{ $m->prix }} €</p>
            @if($m->image_url)
                <img src="{{ $m->image_url }}" alt="Image du matelas" class="img-fluid">
            @else
                <p>Aucune image disponible.</p>
            @endif
            <a href="{{ url("/matelas/$m->id/edit") }}" class="btn btn-primary">Modifier</a>
            <form action="{{ url("/matelas/$m->id") }}" method="post" class="d-inline">
                @csrf <!-- sécurité pour empecher les injections par EX -->
                @method('DELETE') <br>
                <button type="submit" class="btn btn-danger">Supprimer</button>
            </form>
        </div>
    </div>
@endforeach
    @else
        <p>Aucun matelas trouvé.</p>
    @endif
@endsection --}}


