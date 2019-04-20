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
      <p>Babet - {{ $matchs[$i]->adversaire }} :  {{  $matchs[$i]->scoreBabet}} - {{  $matchs[$i]->scoreAdv }}</p>
      <p>{{  $matchs[$i]->date }}<p>

    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Compo:<i class="material-icons right">close</i></span>
    <ul>
      <?php for ($j=0;$j<sizeof($compos[$i]);$j++){ ?>
        <li>{{ $compos[$i][$j][0]->nom}}</li>

      <?php } ?>
    </ul>
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
