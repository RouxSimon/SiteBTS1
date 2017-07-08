<?php session_start();
 ?>

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
// Connexion à la base de données
			
			
			include('fonctionsMySQL.inc.php');
			if(isset($_POST['btnConnexion']))
			{	
				$host='127.0.0.1:3306';
				$user='ADMIN';
				$passeword='admin';
				$dbName='bdd';
				$Connexion=ConnecterMySQL($host,$user,$passeword,$dbName);
				
				if($Connexion!=0)
				{
					$pseudo=$_POST['pseudo'];
					$message=$_POST['message'];
					$pw=$_POST['Pass'];
					$requeteSQL="SELECT Pseudo FROM inscription WHERE Pseudo='$pseudo' AND MotPasse='$pw';";
					$resRequeteSQL = mysql_query($requeteSQL);
					if (!$resRequeteSQL)
					{
						?>
						<script language="JavaScript" type="text/javascript">
							alert("Vous devez vous inscrire pour participer au chat.");
							document.location.href="minichat.php";
						</script>
						<?php
						
						echo "Erreur : $requeteSQL <br />".mysql_error();	
					}
					else
					{	
						$utilisateur = mysql_fetch_array($resRequeteSQL);
						
						$connectedUser=$utilisateur['Pseudo'];
						
							
						$_SESSION['auteurNews']=$connectedUser;
						header("location:minichat.php");
						exit();
					}	
									
					Deconnexion($Connexion);
				}
			}	
?>	

	</body>
</html>						