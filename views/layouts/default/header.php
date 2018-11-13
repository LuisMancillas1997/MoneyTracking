
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sistema Money Tracking</title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>bootstrap.min.css">
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?php  echo APP_URL.'transacciones';?>">Sistema Money Tracking</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?php  echo APP_URL.'transacciones';?>">Transacciones</a></li>
      <li><a href="<?php  echo APP_URL.'categorias';?>">Categorias</a></li>
      <li><a href="<?php  echo APP_URL.'cuentas';?>">Cuentas</a></li>
    </ul>
  </div>
</nav>