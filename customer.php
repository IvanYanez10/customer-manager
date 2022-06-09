<?php
  if(isset($_POST['submit']))
  {
    $userId = $_POST["userID"];
  } 
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./static/customer-style.css">
  <title>Document</title>
</head>
<body>
  <header class="p-3 bg-dark text-white">
  </header>

  <div class="row content">

    <div class="col-2 first">

      <div class="row customer-data">
        <p>ID <?= $userId ?></p>
        <p>Nombre</p>
        <p>Registro</p>
        <p>Contacto</p>
      </div>

      <div class="row">
        <img src="" alt="AD">
      </div>

    </div>

    <div class="col-10 services">
      <p>SERVICES</p>
    </div>

  </div>

  <footer >
    <a href="#">Politicas de privacidad</a>
    <a href="#">Terminos y condiciones</a>
  </footer>
</body>
</html>