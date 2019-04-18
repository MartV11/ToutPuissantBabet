@extends('layout')


@section('content')

<div class="container center">
	<h1></h1>
	<div>
	<img class="suze" style="width: 280px; height: 200px;" src="./img/suze_logo.png">
</div>
	<div class="divider"></div>
</div>

<div class="container">
<table class="striped blue z-depth-1">
        <thead>

          <tr>
              <th>Les buteurs</th>
              <th>Nombre de but</th>
              <th>Nombre de match</th>
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
