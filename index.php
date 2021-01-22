<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eser</title>
<!--  qua inserire link esterni-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
<link href="style.css" rel="stylesheet"> 
</head>
<body>
<div class="intestazione">
<h1> Benvenuto!</h1>
</div>
    <div class="sezionebottoni">
    <button type="button" id="registrati" class="btn btn-primary">Registrati</button>
    <button type="button" class="btn btn-warning">Mostra utenti</button>
    </div>

    <form action="" id="form" method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputname" name="nome">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cognome</label>
    <input type="text" class="form-control" id="inputsurname" name="cognome">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Sesso</label>
        <select id="selectgen" name="sesso">
            <option value="maschio">M</option>
            <option value="femmina">F</option>
            <option value="bo">BO</option>

        

    </select>
    <div class="messaggioerrore"></div>
  </div>
</form>
<div class="containerbottone" id="esempio">
<button type="submit" id="submit" class="btn btn-primary">Submit</button>
<button  id="annull" class="btn btn-danger">Annulla</button>
</div>

</body>
</html>
<!-- script vanno dopo html-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="libreria.js"></script>
