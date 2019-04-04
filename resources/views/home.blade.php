@extends('layout')





@section('content')
<!-- CONTENU ACTU -->

  <div class="actu">
    <div class="row content one-actu">
      <div class="news center">
      <h1>NEWS</h1>
    </div>
      <div class="col s12 m12 l12 xl12 effet">
        <div class="card">
        <div class="card-image">
          <img src="./img/arsenal.jpg">
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
        <div class="card-image">
          <img src="./img/arsenal.jpg">
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
        <div class="card-image">
          <img src="./img/arsenal.jpg">
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
        <div class="card-image">
          <img src="./img/arsenal.jpg">
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
      
    <div class="info">
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


    <!-- FOOTER -->

  <footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Footer Content</h5>
                <p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
            </div>
          </div>
        </footer>
@endsection 