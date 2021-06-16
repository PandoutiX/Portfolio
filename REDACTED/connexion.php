<?php

session_start();	//On lance le mécanisme de session.

require_once("../connexion_bdd.php");	//On importe le code compris dans la page de connexion_bdd.

$json = @json_decode($_POST['Password'], true);

$Login=$json['login'];	//On récupère la variable de Login fournit grâce au formulaire.
if (!preg_match('#^[\w]{1,25}$#', $Login)) {
	setcookie("Errored ?", "true");
	header('Location:CheminVersLeRoyaumeDuDieuIBIS.php');
	exit();
}

$Password=$json["password"];	//Pareil avec le Password.
if (!preg_match('#^[\w!@\#$+\-*&_]{1,50}$#', $Password)) {
	setcookie("Errored?", "true");
	header('Location:CheminVersLeRoyaumeDuDieuIBIS.php');
	exit();
}

$conn1=connexionBDD();	//On se connecte à la BDD.

function Connexion($Login, $connex) {
    $sql="SELECT MotDePasse FROM TECHNICIENS WHERE Pseudo = '$Login'";
    $result=$connex->query($sql);
	return $result;
}

$res=Connexion($Login, $conn1);	//On lance la fonction Connexion avec comme paramètres le pseudo.
$resu = $res->fetch();	//On extrait les données et les mets dans un tableau.
$RealPassword=$resu['MotDePasse'];	//On récupère le hash dans la bdd.


if (($Login=="PandoutiX") && ($Password==$RealPassword)){	//On regarde si le mot de passe soumis hashé correspond à celui dans la bdd. => Toujours utiliser == pour plus de sécurité ;)
	if ((isset($_COOKIE["Errored?"]))&&($_COOKIE["Errored?"]==="true")){
		unset($_COOKIE["Errored?"]);
		setcookie('Errored?', null, -1, '/');
	}
	$_SESSION["Autorisation"]="ok";	//Si c'est le cas on défini la variable de session autorisation à OK.
	session_cache_expire(15);	//On défini aussi la durée de la session à 15 mins.
	header('Location:LeRoyaumeDuDieuIBIS.php');	//Et pour finir on renvoie vers la page LeRoyaumeDuDieuIBIS.php.
	exit();	//On sort du php.
} else {	//Si le mot de passe donné ne correspond pas à celui présent dans la BDD alors :
	setcookie("Errored?", "true"); //On set le cookie
	header('Location:CheminVersLeRoyaumeDuDieuIBIS.php');	//Et pour finir on renvoie vers la page CheminVersLeRoyaumeDuDieuIBIS.php.
	exit();	//On sort du php.
}

?>