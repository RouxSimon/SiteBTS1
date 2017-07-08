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
					$demandeur=$_POST['utilisateur'];
					$pwDemandeur=$_POST['motPasse'];
					$requeteSQL="SELECT * FROM inscription WHERE Pseudo='$demandeur' AND MotPasse='$pwDemandeur'".";";
					$resRequeteSQL = mysql_query($requeteSQL);
					if (!$resRequeteSQL)
					{
						echo "Erreur : $requeteSQL <br />".mysql_error();	
					}
					else
					{	
						$profilDemandeur = mysql_fetch_array($resRequeteSQL);
						$droitsDemandeur = $profilDemandeur['Droits'];
						if ($droitsDemandeur=="USER")
						{
							header("location:redigerNews.php?demandeur=$demandeur");
							exit();
						}
						else if ($droitsDemandeur=="ADMIN")
						{
							header("location:administrateurNews.php?demandeur=$demandeur");
							exit();
						}	
					}	
				Deconnexion($Connexion);
			
		?>	        <script language="JavaScript" type="text/javascript">
					<!--
							alert("Paramètres de connexion invalide.");
							document.location.href="index.php";
					-->
					</script>
				<?php
				}		
			else
			{
		?>			<script language="JavaScript" type="text/javascript">
					<!--
						alert("Connexion impossible.");
						document.location.href="index.php";
					-->
					</script>
		<?php
			}
			}
		?>	
	</body>
</html>	