<?php
  session_start();
  if(!isset($_SESSION["USERID"])){
    header("location: http://localhost/customer-manager/");
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="./static/customer-style.css">
  <title>- | Cliente</title>
</head>
<body>
  <header class="bg-dark text-white">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        
      <a href="/" class="">
        <img src="" alt="logo">
      </a>
      
    </div>
  </header>

  <div class="content h-75">

    <div class="col-2 first">

      <div class="customer-data">        
        <p><?php echo 'empresa' ?></p>
        <p>ID <?php echo $_SESSION["USERID"] ?></p>
        <p>febrero 2015</p>
        <p>55 5555 5555</p>
      </div>

      <div class="ads">
        <img class="" src="https://picsum.photos/250" alt="AD image">
      </div>

    </div>

    <div class="services">

      <div>
        <h3 style="width:150px;display:inline;" class="justify-content-center">Servicios</h3>
        <select id="cars" name="carlist" form="carform" class=""  style="width:150px;float:right;" >
          <option value="volvo">Estado</option>
          <option value="saab">Completdo</option>
          <option value="opel">Con factura</option>
          <option value="audi">Sin pagar</option>
        </select>
      </div>
      
      <div class="row">
        <div class="col-1">
          <p>#</p>
        </div>
        <div class="col-6">
          <p>Servicio</p>
        </div>
        <div class="col-2">
          <p>Fecha</p>
        </div>
        <div class="col-2">
          <p>Estado</p>
        </div>
        <div class="col-1">
          <p>Costo</p>
        </div>            
      </div>

      <div class="list-services">
        <?php        
        for ($i=0; $i < 20; $i++) { ?>
          <div class="service row">
            <div class="col-1">
              <p><?php echo $i; ?></p>
            </div>
            <div class="col-6">
              <p>Servicio </p>
            </div>
            <div class="col-2">
              <p>25/03/2016</p>
            </div>
            <div class="col-2">
              <p>Completado</p>
            </div>
            <div class="col-1">
              <p>$250</p>
            </div>            
          </div>
        <?php } ?>
      </div>
    </div>
    

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>