@extends('layout')





@section('content')
<!-- CONTENU ACTU -->

  <div class="actu">
    <div class="row content one-actu">
      <div class="news center">
      <h1>NEWS</h1>
    </div>
      <div class="col s12 m12 l12 xl12">
        <div class="card">
        <div class="card-image effet">
          <img class="img-news" src="./img/arsenal.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
      </div>
    </div>

  <div class="row content">
    <div class="col s12 m12 l4">
      <div class="card">
        <div class="card-image effet">
          <img class="img-news" src="./img/arsenal.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4">
      <div class="card">
        <div class="card-image effet">
          <img class="img-news" src="./img/arsenal.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
    <div class="col s12 m12 l4">
      <div class="card">
        <div class="card-image effet">
          <img class="img-news" src="./img/arsenal.jpg">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information.
          I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
  </div>
</div>



  <!-- Classement et resultat download -->
      
    <div class="info" style="margin-bottom: -50px;">
      <!-- <div class="divider"></div> -->
      <div class="row content ajuster">
        <div class="news center">
         <h1>CLASSEMENT ET RESULTATS</h1>
      </div>
        <div class="col s12 m12 l6 xl6">
      <div class="card">
        <div class="card-image taille">
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
          <img src="./img/resultat.jpg">
          <span class="card-title">Résultats</span>
          <a class="btn-floating btn-large halfway-fab waves-effect waves-light red"><i class="material-icons">cloud_download</i></a>
        </div>
        <div class="card-content">
          <p>I am a very simple card. I am good at containing small bits of information. I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>
    </div>
      </div>
    </div>
    
@endsection