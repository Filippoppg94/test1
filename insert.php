<?php
include 'database.php';
$nome= $_POST['nomeuser'];
$cognome= $_POST['cognomeuser'];
$sesso=$_POST['sesso'];

if(check($nome,$cognome)){
    $messaggio=[
        "tipo"=>"Inserito carattere non permesso"
    ];
    echo json_encode($messaggio);
} else{
    $query="INSERT INTO utenti (nome_utente, cognome_utente, sesso_utente) VALUES (?,?,?)";
    /*$stmt=mysqli_query($conness,$query);
    $stmt->execute(); */
    $stmt=mysqli_prepare($conness,$query);
    $stmt->bind_param('sss',$nome,$cognome,$sesso);
    $stmt->execute();
    $messaggio=[
    "tipo"=>"OK nessun carattere speciale e utente inserito"
    ];
    echo json_encode($messaggio);
}


function check($elemento1,$elemento2){
    if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $elemento1)){
        return true;
      }
      if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $elemento2)){
        return true;
      }
}
