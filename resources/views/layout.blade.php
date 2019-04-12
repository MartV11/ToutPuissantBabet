<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
	   <title>TOUT PUISSANT BABET</title>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
	</head>

    	<body>


        <header>

         <!-- HEADER + NAVIGATION   -->

  <nav>
    <div class="nav-wrapper menu borderXwidth z-depth-2 col s12 m12 l12">
      <a href="main" class="brand-logo"><img class="responsive-img logo" src="./img/logo1.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="actu">ACTUALITE</a></li>
        <li><a href="equipe">EQUIPE</a></li>
        <li><a href="historique">HISTORIQUE</a></li>
        <li><a href="stat">TROPHEE SUZE</a></li>
        <li><a href="match">MATCHS</a></li>
				<li><a href="gallerie">GALERIE</a></li>

      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="actu">Actualité</a></li>
    <li><a href="equipe">Equipe</a></li>
    <li><a href="historique">Historique</a></li>
    <li><a href="stat">Statistiques</a></li>
    <li><a href="gallerie">Galerie</a></li>
  </ul>




    <!-- <div class="container marge center">
      <div class="word ml15 divider"></div>
      <div class="row">
        <h1 class="ml15">
          <span class="word">TOUT</span>
          <span class="word">PUISSANT</span>
          <span class="word">BABET</span>
        </h1>
      </div>
      <div class="word ml15 divider"></div>
    </div> -->


    <div class="center correction z-depth-1 col s12">
    <div class="unbreakable-contain">
  <div class="unbreakable">
    <div class="test"><span class="un">TOUT</span><span class="break">PUISSANT</span><span class="able">BABET</span></div>
  </div>
  <div class="ks">Football Club</div>
</div>
</div>

        </header>

        <div style="margin-bottom: 50px">
          @yield('content')
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


<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    		<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="./js/main.js"></script>
    	</body>

	</html>
