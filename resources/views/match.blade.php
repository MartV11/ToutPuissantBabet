@extends('layout')

@section ('content')


<div class="container">
<div class="news center">
      <h1>MATCH</h1>
    </div>
</div>

<div class="container">
  <div class="row">
    <?php for ($i=0;$i<sizeof($matchs);$i++){?>



    <div class="col s12 m6 l4 xl4">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/classement.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4"><i class="material-icons right">more_vert</i></span>
      <p class="rencontre">Babet - {{ $matchs[$i]->adversaire }}</p><p class="score"><i class="icon ajuste-icon-left"><img src="img/soccer-ball.png"></i>{{  $matchs[$i]->scoreBabet}} - {{  $matchs[$i]->scoreAdv }}<i class="icon ajuste-icon"><img src="img/soccer-ball.png"></i></p>
      <p class="date-rencontre">{{  $matchs[$i]->date }}</p>

    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4 poste-titre-reveal poste-reveal"><i class="icon left"><img src="img/football-player-attempting-to-kick-ball.png"></i>COMPOSITION<i class="material-icons right">close</i></span>
    <ul>
      <?php for ($j=0;$j<sizeof($compos[$i]);$j++){ ?>
        <li class="list-player"><i class="icon ajuste-icon-left"><img src="img/football-shirt.png"></i>{{ $compos[$i][$j][0]->nom}}</li>

      <?php } ?>
    </ul>
    <div class="logo-reveal center"><img src="img/teaser_logo_05_vrai couleur_OK.png"></div>
    </div>
  </div>
</div>
<?php } ?>
</div>
</div>

<!-- <div class="container">
<div class="col s12 m7">
    <h2 class="header">Horizontal Card</h2>
    <div class="card horizontal">
      <div class="card-image">
        <img src="https://lorempixel.com/100/190/nature/6">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
      </div>
      <div class="card-image">
        <img src="https://lorempixel.com/100/190/nature/6">
      </div>
      
    </div>
<ul class="collapsible">
    <li>
      <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
      <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
    </li>
  </ul>
  </div>
</div> -->





@endsection
