<<<<<<< Updated upstream
@extends('layout')

@section('title')
 Les Tout Puissants Babet
@endsection

@section('header')
  <nav>
    <div class="nav-wrapper menu orange borderXwidth">
      <a href="#" class="brand-logo"><img class="responsive-img logo" src="./img/logo1.png"></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html">Actualité</a></li>
        <li><a href="badges.html">Equipe</a></li>
        <li><a href="collapsible.html">Historique</a></li>
        <li><a href="collapsible.html">Trophés</a></li>
        <li><a href="collapsible.html">Gallerie</a></li>
      </ul>
    </div>
  </nav>
@endsection



@section('content')
@endsection 
=======
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
>>>>>>> Stashed changes
