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

$Email = $_POST['Email'];

$sql = "DELETE FROM $tbl_name WHERE UtilisateurEmail = $Email";
  if (!mysql_query($sql,$con)) {
    die('Error: ' . mysql_error());
  }
  else {
    echo '<meta HTTP-EQUIV="REFRESH" content="3; url=index.html">';
    echo "<center><font face='Verdana' size='3' color=red>
    Le compte est bien supprimé. Vous serez rédiger dans 3 seconds ...</font></center>";
  }
?>
