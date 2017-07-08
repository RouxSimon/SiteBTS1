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
		<?php 
			
			session_start();
	
			include ('fonctionsMySQL.inc.php');
			if(isset($_POST['validerNews']))
			{
				$host='127.0.0.1';
				$user='ADMIN';
				$passeword='admin';
				$dbName='bdd';
				$Connexion=ConnecterMySQL($host,$user,$passeword,$dbName);
				
				if($Connexion!=0)
				{
					$titreNews=addslashes($_POST['titre']);
					$textNews=addslashes($_POST['contenu']);
					$dateNews=date('d-m-Y H:m:s',time());
					if($titreNews!="" AND $textNews!="")
					{
						$requeteSQL="INSERT INTO t_news (Titre,Texte,Auteur)
						VALUES ('".$titreNews."','".$textNews."','".$_SESSION['auteurNews']."');";
						
						//echo $requeteSQL;
						
						$resRequeteSQL = mysql_query($requeteSQL);
						if (!$resRequeteSQL)
						{
							echo "Erreur : $requeteSQL <br/ >".mysql_error();
						}
						else
						{
							?> <script language="JavaScript" type="text/javascript">
							<!--
									alert("New sauvegardée.");
									document.location.href="index.php";
							--> </script><?php		
						}	
					}
				}
					
				Deconnexion($Connexion);
			}
			else
			{
				$_SESSION['auteurNews'] = $_GET['demandeur'];
			}	
		?>	
		
		<form action="redigerNews.php" method="post">
			<p style="color:white;"> Titre : <input size="50" type="text" name="titre" value=""/></p>
				<p style="color:white;">Auteur : <input size="40" type="text" name="titre" value="<?php echo $_SESSION['auteurNews']; ?>" disabled="disabled"/></p>
			<p style="color:white;">
				contenu :<br />
				<textarea name="contenu" cols="30" rows="10"></textarea>
				<br />
				<br /><input type="submit" name="validerNews" value="Confirmer" />
			</p>	
		</form>
	</body>
</html>	
		