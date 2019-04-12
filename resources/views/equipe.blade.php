@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    @foreach($goodPlay as $afficheInfo)

    <div class="col s12 m6 l4 xl4">

          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="{{ asset($afficheInfo->photo)}}">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
              <p>{{ $afficheInfo->prenom }}</p>
              <p>{{ $afficheInfo->nom }}</p>

              <p>Poste: {{ $afficheInfo->poste }}</p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>
              <h5>Description:</h5>
              <p>{{ $afficheInfo->description }}</p>
              <p>Taille: {{ $afficheInfo->taille }}</p>
              <p>Poid: {{ $afficheInfo->poids }}</p>
              <p>Pied: {{ $afficheInfo->pied }}</p>
            </div>
          </div>
    </div>
    @endforeach

  </div>
</div>
@endsection
