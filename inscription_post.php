<?php
session_cache_expire(1);
session_start();
// Connexion à la base de données
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=titan;charset=utf8', 'adminTitan', 'CayfugqkRJdZV3jt');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}



$reponse = $bdd->prepare('SELECT * FROM user WHERE email = ?');
$reponse->execute(array($_POST['email']));
$exist = $reponse->rowCount();
$reponse->CloseCursor();

if ($exist > 0) {
  $_SESSION['message'] = '<p style="color:red;">Email déjà utilisée!</p>';
  header('Location: index.php');
} else {
  $checkNewsletter = 0;

if(isset($_POST['newsletter'])) {
  $checkNewsletter= 1;
}

$req = $bdd->prepare('INSERT INTO user (firstname, lastname, email, newsletter) VALUES(?, ?, ?, ?)');
$req->execute(array($_POST['firstname'], $_POST['lastname'], $_POST['email'], $checkNewsletter));

$_SESSION['message'] = '<p style="color:green;">Votre inscription à bien été enregistrée!</p>';
header('Location: index.php');

}

?>