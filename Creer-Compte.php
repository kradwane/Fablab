<?php
session_start();
if(!isset($_SESSION['session'])) {
  echo '<meta HTTP-EQUIV="REFRESH" content="3; url=connexion.html">';
  echo "<center><font face='Verdana' size='3' color=red>
  Vous n'êtes pas connecté. Vous serez rédiger dans 3 seconds ...</font></center>";
  die();
}

header ('Content-type: text/html; charset=utf-8'); // frnech char
$host = "localhost"; // Host name
$username = "root"; // Mysql username
$password = ""; // Mysql password
$db_name = "Fablab"; // Database name
$tbl_name = "Utilisateur"; // Table name

// Connect to server and select databse.
$con = mysql_connect("$host", "$username", "$password") or die("Cannot connect");
mysql_select_db("$db_name") or die("Cannot select DB");
mysql_set_charset("utf8"); // frnech char

$_SESSION['Prenom'] = $_POST['prenom'];
$_SESSION['Nom'] = $_POST['nom'];
$_SESSION['Email'] = $_POST['email'];
$_SESSION['MDP'] = $_POST['mpd'];
$_SESSION['Telephone'] = $_POST['telephone'];

$Utilisateur = $_SESSION['Email'];
$sql = mysql_query("SELECT * FROM $tbl_name WHERE UtilisateurEmail = '$Utilisateur'");
$output = mysql_fetch_array($sql);
$status = $output['UtilisateurStatus'];

function Status()
{
    if($status = 0) {
      $status = 1;
    }
    else{
      $status = 2;
    }
    return $status;
}

$Prenom = $_POST['prenom'];
$Nom = $_POST['nom'];
$Email = $_POST['email'];
$MDP = $_POST['mdp'];
$Telephone = $_POST['telephone'];
$Status = Status();

$sql= "INSERT INTO $tbl_name (UtilisateurPrenom,UtilisateurNom,UtilisateurEmail,UtilisateurMDP,UtilisateurTelephone,UtilisateurStatus)
       VALUES ('$Prenom','$Nom','$Email','$MDP','$Telephone','$Status')";

  if (!mysql_query($sql,$con)) {
    die('Error: ' . mysql_error());
  }
  else {
    echo '<meta HTTP-EQUIV="REFRESH" content="3; url=index.html">';
    echo "<center><font face='Verdana' size='3' color=red>
    Le compte est bien creé. Vous serez rédiger dans 3 seconds ...</font></center>";
  }

    unset($_SESSION['Prenom']);
    unset($_SESSION['Nom']);
    unset($_SESSION['Email']);
    unset($_SESSION['MDP']);
    unset($_SESSION['Telephone']);
?>
