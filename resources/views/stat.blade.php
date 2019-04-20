@extends('layout')


@section('content')

<div class="container">
<div class="news center">
      <h1>TROPHEE SUZE</h1>
    </div>
</div>

<div class="container center">
	<h1></h1>
	<div>
	<img class="suze" style="width: 280px; height: 200px;" src="./img/suze_logo.png">
</div>
	<div class="divider"></div>
</div>

<div class="container">
<table class="striped z-depth-1 tableau">
        <thead>

          <tr class="text-tableau">
              <th><i class="icon left"><img src="img/football-player-attempting-to-kick-ball.png"></i>Les buteurs</th>
              <th><i class="icon left"><img src="img/football.png"></i>Nombre de but</th>
              <th><i class="icon left"><img src="img/soccer-field.png"></i>Nombre de match</th>
          </tr>
        </thead>

        <tbody>
        	@foreach($goal as $classement)

          <tr>
            <td>{{ $classement->nom }} {{ $classement->prenom }}</td>
            <td>{{ $classement->nb_buts }}</td>
            <td>{{ $classement->nb_selec }}</td>
          </tr>

					@endforeach

        </tbody>
      </table>
    </div>


@endsection
