<?php
include 'database.php';
$nome= $_POST['nomeuser'];
$cognome= $_POST['cognomeuser'];
$sesso=$_POST['sesso'];
$query="INSERT INTO utenti (nome_utente, cognome_utente, sesso_utente) VALUES (?,?,?)";
/*$stmt=mysqli_query($conness,$query);
$stmt->execute(); */
$stmt=mysqli_prepare($conness,$query);
$stmt->bind_param('sss',$nome,$cognome,$sesso);
$stmt->execute();
echo "Ok inserito";