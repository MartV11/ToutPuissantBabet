@extends('layout')

@section('content')

<div class="container">
<div class="container">
<div class="news center">
      <h1>EQUIPE</h1>
    </div>
</div>

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
              <p class="prenom">{{ $afficheInfo->prenom }}</p>
              <p class="nom">{{ $afficheInfo->nom }}</p>

              <p class="poste"><i class="icon left"><img src="img/football-field.png"></i><p class="poste-titre">POSTE</p><p class="poste-info">{{ $afficheInfo->poste }}</p></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4"><i class="material-icons right">close</i></span>

              <p class="poste-reveal poste-titre-reveal"><i class="icon left"><img src="img/football-player-attempting-to-kick-ball.png"></i>DESCRIPTION</p>

              <p class="description">{{ $afficheInfo->description }}</p>
              <p class="caractere">Taille : <span class="grey-text">{{ $afficheInfo->taille }}</span></p>
              <p class="caractere">Poids : <span class="grey-text">{{ $afficheInfo->poids }}</span></p>
              <p class="caractere">Pied : <span class="grey-text">{{ $afficheInfo->pied }}</span></p>
            </div>
          </div>
    </div>
    @endforeach

  </div>
</div>


<!-- <div class="container">
  
  <div class="row">
     @foreach($goodPlay as $afficheInfo)
    <div class="col s12 m6 l4 xl4">
     
    <div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="{{ asset($afficheInfo->photo)}}">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>Here is some more information about this product that is only revealed once clicked on.</p>
    </div>
  </div>
  </div>
  @endforeach
  </div>
  
</div> -->



@endsection
