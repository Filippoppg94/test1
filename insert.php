<?php
include 'database.php';
$nome= $_POST['nomeuser'];
$cognome= $_POST['cognomeuser'];
$sesso=$_POST['sess'];
$query2="SELECT * FROM utenti";
$stm=mysqli_query($conness,$query2);
$result=mysqli_num_rows($stm);
echo $result;
