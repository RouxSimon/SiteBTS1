<html style="background-image: url(image/Jinx.jpg); background-size: cover; background-attachment: fixed; background-position: right top;">	
	<?php
		$nbArob=mb_substr_count($_POST['adresseMail'],"@");
		if (isset($_POST['adresseMail'])&&($_POST['Pseudo'])&&($_POST['mdp'])&&($nbArob==1)) 
		{		
				try
				{
					$bdd = new PDO('mysql:host=localhost;dbname=bdd;charset=utf8', 'root', '');
				}
				catch(Exception $e)
				{
					die('Erreur : '.$e->getMessage());
				}

				// On ajoute une entrée dans la table
				$req = $bdd->prepare('INSERT INTO inscription(ligue, rang, sexe, Pseudo, mail, MotPasse, Droits) VALUES(?, ?, ?, ?, ?, ?, ?)');
				$req->execute(array($_POST['Ligue'], $_POST['Rang'], $_POST['civilite'], utf8_encode($_POST['Pseudo']) , $_POST['adresseMail'], $_POST['mdp'], 'USER'));
						
				?> <script language="JavaScript" type="text/javascript">
					<!--
					alert("Inscription réussie.");	
					document.location.href="index.php";
					--> 
				</script><?php
		}		
		else 
		{
			?>
			<script>
				alert("Champ invalid.");
				document.location.href="index.php";
			</script>
			<?php
		}
	?>
	
	
</html>