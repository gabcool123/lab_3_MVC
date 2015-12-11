<!--
@author: Gabriel Morin et Nicolas Bouchard

@description: Ce site est un forum avec un système
              de connection qui permet de s'enreigistrer
              et de se connecter sur sa page de profil.

-->
<!DOCTYPE html>
<html>
<?php
include 'global/head.php';
//Initialisation

include 'global/init.php';

//D�but de la temporisation de sortie
ob_start();

//si un module est sp�cifi�, on regarde s'il existe
if (!empty($_GET['module'])) {
	
	$module = dirname(__FILE__) . '/Modules/' . $_GET['module'] . '/';
	
	//Si l'action est sp�cifi�, on l'utilise, sinon, on tente une action par d�faut
	$action = (!empty($_GET['action'])) ? $_GET['action'] . '.php' : 'index.php';
	
	//Si l'action existe, on l'�x�cute
	if (is_file($module.$action)) {
		
		include $module.$action;
	}
	
	else {
		
		include 'global/accueil.php';
	}
}

else {
	include 'global/accueil.php';
}

//Fin de la tamporisation de sortie 
$contenu = ob_get_clean();

//D�but du code HTML
include 'global/top.php';

echo '<div class="center">'.$contenu.'</div>';

//Fin du code HTML 
include 'global/footer.php';
?>
</html>