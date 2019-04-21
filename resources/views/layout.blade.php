<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
	   <title>TOUT PUISSANT BABET</title>
    <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	 <!-- Compiled and minified CSS -->
	 			<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="./css/style.css">
				<link rel="stylesheet" href="/resources/demos/style.css">

				<meta name="viewport" content="width=device-width, initial-scale=1">


	</head>

    	<body>


        <header>

         <!-- HEADER + NAVIGATION   -->

  <nav>
    <div class="nav-wrapper menu borderXwidth z-depth-2 col s12 m12 l12">
      <a href="main" class="brand-logo"><img class="responsive-img logo" src="./img/teaser_logo_05_vrai couleur_OK.png"></a>
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

        <div>
          @yield('content')
        </div>

        <!-- FIXED ACTION BUTTON -->
        <div class="fixed-action-btn">
          <a href="login" class="btn-floating red btn-large tooltipped" data-position="left" data-tooltip="I am a tooltip"><i class="large material-icons">link_off</i></a>
          <ul>
            <li><a href="main" class="btn-floating blue btn-large"><i class="large material-icons">home</i></a></li>
            <li><a href="formulaire" class="btn-floating orange btn-large"><i class="large material-icons">list_alt</i></a></li>
          </ul>
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
                <h5 class="white-text">Rentre les donnés: </h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="#!">Score et Buteurs</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Actu/resumés</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Nouveaux membres</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">voir les créateurs du site</a></li>
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

	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

    		<!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="./js/main.js"></script>
    	</body>

	</html>
