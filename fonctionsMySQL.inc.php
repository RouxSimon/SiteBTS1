<?php
	// d�finition des fonctions de gestion de la base de donn�es
	//date de cr�ation : 	12/02/2009
	//derni�re mise � jour : 5/03/2009
	function ConnecterMySQL($host,$user,$password,$dbName)
	{
		// Connexion � la base de donn�es
		$resConnexion=mysql_connect($host,$user,$password);
		if (!$resConnexion) 
		{
			die('<br><b>Impossible de se connecter � MySQL:</b><br>' . mysql_error());
			return 0;
		}
		// Selection de la Base de donn�es de travail
		$db_selected = mysql_select_db($dbName, $resConnexion);
		if (!$db_selected)
		{
			die ("<br><b>Impossible d'utiliser la Base de donn�es  :  $dbName</b><br>" . mysql_error($resConnexion));
			return 0;
		}
		return $resConnexion;
	}
	function Deconnexion($Connexion)
	{
		mysql_close($Connexion);
	}
	// envoie la requ�te sur la connexion �tablie
	function EnvoyerRequete($Requete,$Connexion)
	{
		echo "<BR>requete : $Requete � la connexion :$Connexion<BR>";
		$resRequete=mysql_query($Requete);
		if (!$resRequete) 
		{
			die("<br><b>Requ�te invalide :  $resRequete</b><br>" . mysql_error($Connexion));
			return 0;
		}
		return $resRequete;
	}
	function PurgerRequete($resRequete)
	{
		mysql_free_result($resRequete);		
	}
?>