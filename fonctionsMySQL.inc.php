<?php
	// définition des fonctions de gestion de la base de données
	//date de création : 	12/02/2009
	//dernière mise à jour : 5/03/2009
	function ConnecterMySQL($host,$user,$password,$dbName)
	{
		// Connexion à la base de données
		$resConnexion=mysql_connect($host,$user,$password);
		if (!$resConnexion) 
		{
			die('<br><b>Impossible de se connecter à MySQL:</b><br>' . mysql_error());
			return 0;
		}
		// Selection de la Base de données de travail
		$db_selected = mysql_select_db($dbName, $resConnexion);
		if (!$db_selected)
		{
			die ("<br><b>Impossible d'utiliser la Base de données  :  $dbName</b><br>" . mysql_error($resConnexion));
			return 0;
		}
		return $resConnexion;
	}
	function Deconnexion($Connexion)
	{
		mysql_close($Connexion);
	}
	// envoie la requête sur la connexion établie
	function EnvoyerRequete($Requete,$Connexion)
	{
		echo "<BR>requete : $Requete à la connexion :$Connexion<BR>";
		$resRequete=mysql_query($Requete);
		if (!$resRequete) 
		{
			die("<br><b>Requête invalide :  $resRequete</b><br>" . mysql_error($Connexion));
			return 0;
		}
		return $resRequete;
	}
	function PurgerRequete($resRequete)
	{
		mysql_free_result($resRequete);		
	}
?>