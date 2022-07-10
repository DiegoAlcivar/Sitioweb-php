<?php
session_start();
 if(!isset($_SESSION['usuario'])){
  header("Location:../index.php");
 }else{

    if($_SESSION['usuario']=="ok"){
      $nombreUsuario=$_SESSION["nombreUsuario"];      
    }
 }

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>GameBar!</title>
  </head>
  <body>
    <?php $url="http://".$_SERVER['HTTP_HOST']."/sitioweb"?>
   
    <nav class="navbar navbar-expand navbar-light bg-light">
        <div class="nav navbar-nav">
            <a class="nav-item nav-link active" href="#">Administrador del sitio web <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/inicio.php">inicio</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">VideoJuegos</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">cerrar</a>
            <a class="nav-item nav-link" href="<?php echo $url;?>">ver sitio web</a>
        </div>
    </nav>
  <div class="container">
  <br/>
          <div class="row">