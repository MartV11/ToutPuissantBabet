@extends('layout')

@section('content')

<div class="container">
  <div class="row">
    <div class="col s4">
      @foreach($players as $player)

  <div class="card">
<div class="card-image waves-effect waves-block waves-light">
  <img class="activator" src="images/office.jpg">
</div>
<div class="card-content">
  <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
  <p>{{ $player->prenom }}</p>
  <p><a href="#">This is a link</a></p>
</div>
<div class="card-reveal">
  <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
  <p>{{ $player->description }}</p>
</div>
  </div>
    @endforeach
    </div>
  </div>
</div>
@endsection