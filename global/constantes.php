<?php
//Identifiants pour al BD. n�cessaire � PDO2
define('SQL_DSN', 'mysql:dbname=laboratoire_3;host=localhost');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', '');

//Chemins � utiliser pour acc�der aux vues/mod�les/librairies
$module = empty($module) ? !empty($_GET['module']) ? $_GET['module'] : 'index' : $module;
define('CHEMIN_VUE', 'Modules/'.$module.'/Vue/');
define('CHEMIN_MODELE', 'Modeles/');
define('CHEMIN_LIB', 'libs/');
define('CHEMIN_INSCRIPTION', '/');
?>