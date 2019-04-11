@extends('layout')

@section ('content')
<div class="container">
  <div class="row">
    @foreach($match as $afficheInfo)

    <div class="col s12 m6 l4 xl4">
<div class="card">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="img/classement.jpg">
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Card Title<i class="material-icons right">more_vert</i></span>
      <p>Babet - {{ $afficheInfo->adversaire }} :  {{ $afficheInfo->scoreBabet}} - {{ $afficheInfo->scoreAdv }}</p>
      <p>{{ $afficheInfo->date }}<p>

    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">Card Title<i class="material-icons right">close</i></span>
      <p>{{$afficheInfo->nom}}</p>
    </div>
  </div>
</div>
@endforeach

</div>
</div>
@endsection
