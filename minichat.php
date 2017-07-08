<!DOCTYPE html>
<html style="background-image: url(image/Jinx.jpg); background-size: cover; background-attachment: fixed; background-position: right top;">
	

    <head>
		 <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	    <link rel="stylesheet" href="Style.css" />
        <title>Mini-chat</title>
    </head>

	<body>
	
	<div>
		<a href="page 1.php">
			<img style="left:20px;" height="256px" width="256px"   src="image/Nocturne.png" title="Accueil">		
		</a>
	</div>
	<div>
		 <form action="ConnexionChat.php" method="post">
			<p class="titre">Connectez vous :</p>
				<fieldset style="width:320px;" id="connexion"><br />
				
					<label>Pseudo : </label>
					<input type="text" name="pseudo" size="30" /><br />
			
					<label>Mot de passe : </label>
					<input type="password" name="Pass" size="30" />
				<input style="margin-left:150px; width:100px;" type="submit" name="btnConnexion" value="Connexion" />
				</fieldset>		
		</form>
		</div>	
		
		<p>
		<form style="margin-left: 1145px; width: 350px; margin-top: 211px; position: fixed;" action="minichat.php" method="post">
			<label style="color: white;">Message : </label><br/>
			<textarea name="message" id="message" rows="2" cols="50">
			</textarea><br/>
						
			<input style="margin-left:355px;" type="submit" value="Envoyer" name="btnEnvoyer" /><br/><br/>
		</form>
		</p>

		
		
	<div style="border: 4px outset rgba(42, 40, 131, 0.78); background: white none repeat scroll 0% 0%; width: 422px; height: 478px; margin-top: -278px; margin-left: 1145px; position: fixed;">	
				<div style="margin-left:15px;">
				<?php 
					session_start();
					
					//echo("toto : ".$_SESSION['auteurNews']."<br/><br/><br/><br/><br/><br/><br/>");	
					
					include ('fonctionsMySQL.inc.php');
					$host='127.0.0.1';
					$user='ADMIN';
					$passeword='admin';
					$dbName='bdd';
					$Connexion=ConnecterMySQL($host,$user,$passeword,$dbName);
					
					//Si la connexion MySql est validé on affiche les anciens messages. 
					
					if($Connexion!=0)
					{
						$repRequete=mysql_query('SELECT * FROM minichat ORDER BY ID DESC LIMIT 0,20');
						while ($valchat = mysql_fetch_array($repRequete))
						{
							$numNews=$valchat['ID'];
							$auteur=$valchat['Pseudo'];
							$message=$valchat['message'];
							
							echo " $auteur : $message<br/>";
						}
					}
					
					//Envoie d'un nouveau message si l'utilisateur existe et est connecté.
					
					if(isset($_POST['btnEnvoyer']))
					{
						if(isset($_SESSION['auteurNews']))
						{

								$pseudo = $_SESSION['auteurNews'];
								$message = $_POST['message'];
								$requeteSQL="INSERT INTO minichat (Pseudo,message) VALUES ('".$pseudo."','".$message."');";	
								$test = mysql_query($requeteSQL);
								Deconnexion($Connexion);
								header("location:minichat.php");				
						}
						else
						{
							echo(
								"<script language='JavaScript' type='text/javascript'>
									alert('Vous devez vous connecter pour participer au minichat.');
								</script>"
							);
						}
					}
				?>	
				
				</div>
			</div>
	 </body>
</html>