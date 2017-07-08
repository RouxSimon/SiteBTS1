<!DOCTYPE html>

<!-- 
Page HTML
Crée le 09/09/15
Modifié le 04/11/15
-->

<html style="background-image: url(image/Jinx.jpg); background-size: cover; background-attachment: fixed; background-position: right top;">	

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="Style.css" />
        <link rel="icon" type="image/png" href="image/lol.png" />
        <title> Champion List : Le site des champion </title>
    </head>
	
	<body>


	<a href="page 1.php">
		<img style="left:20px;" height="256px" width="256px"   src="image/Renekton.jpg" title="Accueil">		
	</a>


<div style="margin-left:20px; position:absolute;">
				   
				  <form action="page 6.php" method="post">
					<p class="titre">Inscrivez vous :</p>
					<fieldset id="inscription"><br />   

						<p><label>Ligue : </label>
								<select id="ligue" name="Ligue">
									<option value="bronze">Bronze</option>
									<option value="argent">Argent</option>
									<option value="or">Or</option>
									<option value="platine">Platine</option>
									<option value="diamant">Diamant</option>
									<option value="master">Master</option>
									<option value="challenger">Challenger</option>
								</select>
								
							   <select id="rang" name="Rang">
										<?php
											$Rang=0
										?>
									<option value="1">I</option>
									<option value="2">II</option>
									<option value="3">III</option>
									<option value="4">IV</option>
									<option value="5">V</option>
								</select>
							</p>
						
							<p id="civilite"><label>Civilité : </label>
								<input type="radio" checked="checked" name="civilite" value="1" />Homme
								<input type="radio" name="civilite" value="2" />Femme
							</p>

							<label>Pseudo : </label>
								<input style="width:267px;" type="text" name="Pseudo" size="30" /><br />
								
							<label>Adresse mail : </label>
								<input style="width:267px;" type="text" name="adresseMail" size="30" /><br />
					
					
							<label>Mot de passe : </label>
								<input style="width:77px; margin-right:5px;" type="password" name="mdp" size="30" />
						
						
						<p id="buttons">
							<input id="bibi" name="bar" type="submit" value="S'enregister"/>		
							<input type="reset" value="Recommencer" />
						</p>
					
				</fieldset>
			</form>
		</div>


		<div style="margin-left:800px; position:absolute; margin-top: -230px;" align="center">
			<fieldset align="top" style="width:600px;">
				<legend> Ecrire un TRUC </legend>
				<span>
					<form action="controlerDroits.php" method="post">
						Utilisateur :&nbsp;<input type="text" name="utilisateur"/>
						&nbsp;&nbsp;Mot de passe :&nbsp;<input type="password" name="motPasse" /><br /><br />
						&nbsp;&nbsp;<input type="submit" name="btnConnexion" value="Connexion" />
					</form>
				</span>
			</fieldset>
		
		<h2> Les news s'affichent ici : </h2>
		<?php 
		
		session_start();
		//$_SESSION['auteurNews']="";		
		include ('fonctionsMySQL.inc.php');
		
			$host='127.0.0.1';
			$user='ADMIN';
			$passeword='admin';
			$dbName='bdd';
			$Connexion=ConnecterMySQL($host,$user,$passeword,$dbName);
			
			if($Connexion!=0)
			{
				$repRequete=mysql_query('SELECT * FROM t_news ORDER BY idNews DESC LIMIT 0,5');
				while ($valNews = mysql_fetch_array($repRequete))
				{
					$numNews=$valNews['idNews'];
					$titreNews=$valNews['Titre'];
					$auteur=stripslashes($valNews['Auteur']);
					$dateHeureCreation=strftime("%d %b %Y", strtotime($valNews['DateCreation']));
					$dateHeureModif=date('d/m/y à H:i:s',strtotime($valNews['DateModification']));
					$news = nl2br(stripslashes ($valNews['Texte']));
					
					echo "<div class='StyleNEWS'><h3> N°$numNews) $titreNews :";
					echo "<em> créée le $dateHeureCreation par $auteur</em></h3>";
					echo "$news <br/>";
					echo "</div>";
				}
				Deconnexion($Connexion);
			}
		?>
	</div>
	</body>
</html>	
