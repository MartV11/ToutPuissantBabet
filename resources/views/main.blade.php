@extends('layout')





@section('content')
<!-- CONTENU ACTU -->

  <div class="actu">
    <div class="row content one-actu">
      @foreach($grosseActu as $principalActu)
      <div class="news center">
      <h1>NEWS</h1>
    </div>
      <div class="col s12 m12 l12 xl12">
        <div class="card">
        <div class="card-image effet">
          <div class="divider"></div>
          <img class="img-news" src="{{ asset($principalActu->image)}}">
          <span class="card-title fond-title">{{ $principalActu->titre }}</span>
        </div>
        <div class="card-content">
          <p>{{ $principalActu->texte }}</p>
        </div>
      </div>
      </div>
      @endforeach
    </div>

  <div class="row content">
    @foreach($mainActu as $afficheActu)
    <div class="col s12 m12 l4">

      <div class="card">

        <div class="card-image effet">
          <div class="divider"></div>
          <img class="img-news" src="{{ asset($afficheActu->image)}}">
          <span class="card-title">{{ $afficheActu->titre }}</span>
        </div>
        <div class="card-content">
          <p>{{ $afficheActu->texte }}</p>
          <span class="grey-text"><em>{{ $afficheActu->created_at }}</em></span>
        </div>
      </div>
    </div>
    @endforeach
</div>



  <!-- Classement et resultat download -->
      
    <div class="info">
      <!-- <div class="divider"></div> -->
      <div class="row content ajuster">
        <div class="news center">
         <h1>CLASSEMENT ET RESULTATS</h1>
      </div>
        <div class="col s12 m12 l6 xl6">
      <div class="card">
        <div class="card-image taille">
          <div class="divider"></div>
          <img src="./img/classement.jpg">
          <span class="card-title">Classement</span>
          <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">cloud_download</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>


    <div class="col s12 m12 l6 xl6">
      <div class="card">
        <div class="card-image taille">
          <div class="divider"></div>
          <img src="./img/resultat.jpg">
          <span class="card-title">Résultats</span>
          <a target="_blank" href="./img/logo1.png" class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">cloud_download</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
      </div>
    </div>
    
@endsection