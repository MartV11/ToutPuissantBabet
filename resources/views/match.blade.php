@extends('layout')

@section ('content')
<div class="container">
  <div class="row">
    <?php for ($i=0;$i<sizeof($matchs);$i++){?>



    <div class="col s12 m6 l4 xl4">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/classement.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p>Babet - {{ $matchs[$i]->adversaire }} :  {{  $matchs[$i]->scoreBabet}} - {{  $matchs[$i]->scoreAdv }}</p>
      <p>{{  $matchs[$i]->date }}<p>

    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
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
@endsection
