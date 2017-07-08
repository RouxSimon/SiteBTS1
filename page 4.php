<!DOCTYPE html>
<html>

<!-- 
Page HTML
Crée le 09/09/15
Modifié le 04/11/15
-->
<html style="overflow-y: hidden; background-image: url(image/Talon.jpg); background-size: cover; background-attachment: fixed; background-position: right top;">	
	<head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="Style.css" />
         <link rel="icon" type="image/png" href="image/lol.png" />  <!-- C:\Users\Sim0n\Desktop\Autre\Html\image" -->
        <title> Champion List : Le site des champion </title>	
	</head>
	<body>
		
		<button id="Pierre" style="position:fixed; left:43%; top:15px;" type="button" onclick="javascript:regardeBien();">Cliquez ici pour les détails</button>
		
		<script language="javascript">
			function regardeBien()
				{
					alert("Regardez bien certaines images grossissent au passage de la souris ou sont des liens (les 3 images du bas). P.S.: Utilisez le scroll pour descendre même si il n'y a pas de barre !");
					document.getElementById('Pierre').style.visibility="hidden";
				}
		</script>
		
		<script language="javascript">
			function remettreBouton()
				{
					document.getElementById('Pierre').style.visibility="";
				}
		</script>
	
		<div id="main" style="top:0px;position: relative;">
			
			<a href="page 1.php">
				<img style="position:absolute; left:20px;" height="256px" width="256px"   src="image/Gallery 5.png" title="Accueil">		
			</a>
				
			<img style="position:absolute; right:100px; top:100px;"  src="image/Gallery 1.png">
				
			<img style="position:absolute; left:10px; top:500px;" src="image/Gallery 2.png">
				
			<img style="position:absolute; right:0px; top:700px;" src="image/Gallery 4.png">
				
			<img style="position:absolute; left:0px; top:1400px;" src="image/Gallery 6.png">
				
			<img style="position:absolute; right:10px; top:1900px;" src="image/Gallery 7.png">
				
			<img id="img6" style="position:absolute; left:100px; top:2700px;" src="image/Gallery 8.png">
			<img id="img6bis" style="position:absolute; left:300px; top:2900px;" src="image/Gallery 9.png">
				
			<img onclick="javascript:remettreBouton();" style="position:absolute; bottom:0px; right:5px; top:2700px;" src="image/Gallery 3.png">
		</div>
	
		
		
		<script type="text/javascript">
			function scroll(e, min, max) {
				var PAS= 70;												// defini le pas a chaque scroll
				var top=document.getElementById("main").style['top'];
				top=top.split("px")[0];										// enlève le px a la fin de la valeur recuperer dans le css
			
    		// ******************************************	scroll haut - bas 	***********************************************
				var evt=window.event || e 									
				var delta=evt.detail? evt.detail*(-120) : evt.wheelDelta
				if(delta>0)													// ajout ou soustraction du pas selon le scroll
					top=parseInt(top)+PAS;
				else
					top=parseInt(top)-PAS;
		    //*******************************************	verification des limites ******************************************
				if(top*-1>max)
					top = max*-1;
				else if(top > min)
					top = min;
			//*******************************************	application du scroll 	*******************************************
				document.getElementById("main").style.top = top+"px";
			}

			window.onload = function() {
				var mousewheelevt=(/Firefox/i.test(navigator.userAgent))? "DOMMouseScroll" : "mousewheel";
				var MINTOP=document.getElementById("main").style['top'].split("px")[0];	// valeur d'origine du scroll (peut être negative)
				var MAXTOP = 2620;

				if (document.attachEvent) 			
					document.attachEvent("on"+mousewheelevt, function(e){scroll(e,MINTOP,MAXTOP)})
				else if (document.addEventListener) 
					document.addEventListener(mousewheelevt, function(e){scroll(e,MINTOP,MAXTOP)}, false)
			}
	</script>
	</body>
</html>