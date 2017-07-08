
<!DOCTYPE html>

<!-- 
Page HTML
Crée le 09/09/15
Modifié le 04/11/15
-->

<html style="background-image: url(image/Jinx.jpg); background-size: cover; background-attachment: fixed; background-position: right top;">	

    <head>
		<!--Import Google Icon Font-->
		<link href='https://fonts.googleapis.com/css?family=Passion+One:700' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
		
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>

		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	  
        <meta charset="utf-8" />
		
        <link rel="stylesheet" href="Style.css" />
		
         <link rel="icon" type="image/png" href="image/lol.png" />
		 
        <title> Champion List : Le site des champion </title>		
    </head>
	
	
	<body>
		<div id="main" style="top:0px;position: relative;">

		<div class="navbar-fixed">	
			<nav>
				<div class="nav-wrapper">
				  <a class="brand-logo">Choisissez une catégorie :</a>
				  <ul id="nav-mobile" class="right hide-on-med-and-down">
					<li><a href="page 2.php">Personnages </a></li>
					<li><a href="index.php">Inscription </a></li>
					<li><a href="page 4.php">Galerie </a></li>
					<li><a href="minichat.php">Chat </a></li>
					<li><a href="logout.php">Deconnection </a></li>
				  </ul>
				</div>
			</nav>
		</div>
		
		<h1 id="ancre"> Champion List</h1>
		
		<div class="row">
        <div class="col s12 m6">
          <div class="card">
            <div class="card-content white-text">
              <span class="card-title">Résumé :</span>
              
			  <p style="font-family: 'Oswald', sans-serif; text-shadow: -1px -1px #000, 1px 1px #000, -3px 0 4px #000;">
				League of Legends (surnommé LoL, anciennement nommé League of Legends: Clash of Fates) est un jeu vidéo d'ordinateur de type arène de bataille en ligne multijoueur (MOBA) gratuit développé et édité par Riot Games sur Windows et Mac OS X. Fin janvier 2013, un nouveau client bêta pour Mac a été distribué par Riot Games. Le jeu a été évoqué pour la première fois le 8 octobre 2008 et est entré en phase bêta le 10 avril 2009.
				Deux concepteurs du mod très populaire de Warcraft III, Defense of the Ancients: Allstars (plus connu sous son abréviation DotA), Steve « Guinsoo » Feak et Steve « Pendragon » Mescon, ont rejoint Riot Games pour la réalisation de League of Legends, d'où une forte similitude avec DotA. Pendragon, le directeur des relations communautés chez Riot Games, a participé à la création du site Internet de DotA: Allstars ainsi qu'à ses forums.
				League of Legends devient rapidement un véritable phénomène. C'est en 2013 qu'il devient l'un des jeux les plus joués au monde. Il séduit aussi le monde du sport électronique en devenant l'événement eSport le plus regardé de l'histoire, avec plus de 32 millions de spectateurs en ligne et plus de 11,5 millions de vues simultanées lors de la finale de la saison 4.
			  </p>
			  
            </div>
            <div class="card-action">
              <a href="https://fr.wikipedia.org/wiki/League_of_Legends">Tout savoir de League of Legends</a>
            </div>
          </div>
        </div>
      </div>
		
		
		
		
		<div class="contenu">
				
			<p>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/vzHrjOMfHPY" frameborder="0" allowfullscreen ALLOWTRANSPARENCY="true"></iframe>
			</p>
		</div>
		
		
			<a href="image/vi.jpg">
				<img style="margin-left: 80%; margin-bottom: -35px;" src="image/Vi.gif">
			</a>	
		
		<footer class="page-footer">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Description</h5>
                <p class="grey-text text-lighten-4">Vous trouverez ici les liens utiles :</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Links</h5>
                <ul>
                  <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/leagueoflegends">Facebook</a></li>
                  <li><a class="grey-text text-lighten-3" href="http://euw.leagueoflegends.com/fr">League of Legend</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            <a onclick=window.open('mailto:sim.roux@hotmail.fr','_self') class="grey-text text-lighten-4 left">Nous envoyer un mail</a>
            <a class="grey-text text-lighten-4 right" href="Contact.txt">Contact</a>
            </div>
          </div>
        </footer>

		
		<!--Import jQuery before materialize.js-->
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="materialize/js/materialize.min.js"></script>	
	</body>
</html>